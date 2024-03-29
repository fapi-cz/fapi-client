<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\AuthorizationException;
use Fapi\FapiClient\FapiClient;
use Fapi\FapiClient\ValidationException;
use Fapi\FapiClientTests\MockHttpClients\FapiClientInvoicesMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Nette\Utils\Strings;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;
use const LOCKS_DIR;

require __DIR__ . '/../../bootstrap.php';

class FapiClientInvoicesTest extends TestCase
{

	private CapturingHttpClient $httpClient;

	private FapiClient $fapiClient;

	protected function setUp(): void
	{
		Environment::lock('FapiClient', LOCKS_DIR);

		$this->httpClient = new CapturingHttpClient(
			new GuzzleHttpClient(),
			__DIR__ . '/MockHttpClients/FapiClientInvoicesMockHttpClient.php',
			FapiClientInvoicesMockHttpClient::class,
		);

		$this->fapiClient = new FapiClient(
			'slischka@test-fapi.cz',
			'jIBAWlKzzB6rQVk5Y3T0VxTgn',
			'https://api.fapi.cz/',
			$this->httpClient,
		);
	}

	protected function tearDown(): void
	{
		$this->httpClient->close();
	}

	public function testCreateGetUpdateAndDeleteInvoices(): void
	{
		$createdInvoice = $this->fapiClient->getInvoices()->create([
			'client' => 1808089,
			'items' => [
				[
					'name' => 'Sample Item',
					'price' => 10,
				],
			],
			'iban' => 'CZ3820100000002901621321',
			'swift' => 'FIOBCZPPXXX',
		]);

		Assert::type('array', $createdInvoice);
		Assert::type('int', $createdInvoice['id']);
		Assert::type('string', $createdInvoice['number']);
		Assert::same('Sample Item', $createdInvoice['items'][0]['name']);

		$invoices = $this->fapiClient->getInvoices()->findAll([
			'limit' => 1,
		]);

		Assert::type('array', $invoices);
		Assert::type('array', $invoices[0]);
		Assert::type('int', $invoices[0]['id']);

		$invoice = $this->fapiClient->getInvoices()->find($createdInvoice['id']);
		Assert::same($createdInvoice['id'], $invoice['id']);
		Assert::same($createdInvoice['number'], $invoice['number']);

		$invoicePdf = $this->fapiClient->getInvoices()->getPdf($invoice['id']);
		Assert::type('string', $invoicePdf);
		Assert::true(Strings::startsWith($invoicePdf, '%PDF-1.4'));

		$updatedInvoice = $this->fapiClient->getInvoices()->update($invoice['id'], [
			'notes' => 'Sample footer note',
		]);

		Assert::type('array', $updatedInvoice);
		Assert::same($invoice['id'], $updatedInvoice['id']);
		Assert::same('Sample footer note', $updatedInvoice['notes']);

		Assert::exception(function (): void {
			$this->fapiClient->getInvoices()->find(1);
		}, AuthorizationException::class, 'You are not authorized for this action.');

		$count = $this->fapiClient->getInvoices()->getCount([
			'user' => 3,
			'status' => 'issued',
			'created_on_from' => '2017-06-01 00:00:00',
			'created_on_to' => '2017-07-01 23:59:59',
		]);
		Assert::same(0, $count);

		$this->fapiClient->getInvoices()->sendEmailWithInvoice([
			'invoice' => $invoice['id'],
			'message_template' => 'E-mail pro vystavení objednávky',
		]);

		Assert::exception(function (): void {
			$this->fapiClient->getInvoices()->sendEmailWithInvoice([
				'invoice' => -1,
			]);
		}, ValidationException::class);

		Assert::exception(function (): void {
			$this->fapiClient->getInvoices()->sendEmailWithInvoice([
				'invoice' => 1,
			]);
		}, AuthorizationException::class);

		$qrCode = $this->fapiClient->getInvoices()->generateQrCode([
			'invoice' => $invoice['id'],
		]);
		Assert::type('string', $qrCode);

		$invoicesSequence = $this->fapiClient->getInvoices()->getInvoicesSequence((int) $invoice['id']);
		Assert::type('array', $invoicesSequence);
		Assert::equal([['id' => 185993812, 'type' => 'proforma']], $invoicesSequence);

		$this->fapiClient->getInvoices()->delete($invoice['id']);

		Assert::null($this->fapiClient->getInvoices()->find($invoice['id']));
		Assert::null($this->fapiClient->getInvoices()->getPdf($invoice['id']));
	}

}

(new FapiClientInvoicesTest())->run();
