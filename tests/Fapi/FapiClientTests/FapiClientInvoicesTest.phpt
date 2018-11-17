<?php
declare(strict_types = 1);

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

require __DIR__ . '/../../bootstrap.php';

class FapiClientInvoicesTest extends TestCase
{

	/** @var CapturingHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		$this->httpClient = new CapturingHttpClient(
			new GuzzleHttpClient(),
			__DIR__ . '/MockHttpClients/FapiClientInvoicesMockHttpClient.php',
			FapiClientInvoicesMockHttpClient::class
		);

		$this->fapiClient = new FapiClient(
			'test1@slischka.cz',
			'pi120wrOyzNlb7p4iQwTO1vcK',
			'https://api.fapi.cz/',
			$this->httpClient
		);
	}

	protected function tearDown()
	{
		$this->httpClient->close();
	}

	public function testCreateGetUpdateAndDeleteInvoices()
	{
		$createdInvoice = $this->fapiClient->invoices->create([
			'client' => 1104658,
			'items' => [
				[
					'name' => 'Sample Item',
					'price' => 10,
				],
			],
			'iban' => 'CZXX0800000000XXXXXXXXXX',
			'swift' => 'GIBACZPX',
		]);

		Assert::type('array', $createdInvoice);
		Assert::type('int', $createdInvoice['id']);
		Assert::type('string', $createdInvoice['number']);
		Assert::same('Sample Item', $createdInvoice['items'][0]['name']);

		$invoices = $this->fapiClient->invoices->findAll([
			'limit' => 1,
		]);

		Assert::type('array', $invoices);
		Assert::type('array', $invoices[0]);
		Assert::type('int', $invoices[0]['id']);

		$invoice = $this->fapiClient->invoices->find($createdInvoice['id']);
		Assert::same($createdInvoice['id'], $invoice['id']);
		Assert::same($createdInvoice['number'], $invoice['number']);

		$invoicePdf = $this->fapiClient->invoices->getPdf($invoice['id']);
		Assert::type('string', $invoicePdf);
		Assert::true(Strings::startsWith($invoicePdf, '%PDF-1.4'));

		$updatedInvoice = $this->fapiClient->invoices->update($invoice['id'], [
			'notes' => 'Sample footer note',
		]);

		Assert::type('array', $updatedInvoice);
		Assert::same($invoice['id'], $updatedInvoice['id']);
		Assert::same('Sample footer note', $updatedInvoice['notes']);

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient) {
			$fapiClient->invoices->find(1);
		}, AuthorizationException::class, 'You are not authorized for this action.');

		$count = $this->fapiClient->invoices->getCount([
			'user' => 3,
			'status' => 'issued',
			'created_on_from' => '2017-06-01 00:00:00',
			'created_on_to' => '2017-07-01 23:59:59',
		]);
		Assert::same(0, $count);

		$this->fapiClient->invoices->sendEmailWithInvoice([
			'invoice' => $invoice['id'],
			'message_template' => 'E-mail pro vystavení objednávky',
		]);

		Assert::exception(function () {
			$this->fapiClient->invoices->sendEmailWithInvoice([
				'invoice' => -1,
			]);
		}, ValidationException::class);

		Assert::exception(function () {
			$this->fapiClient->invoices->sendEmailWithInvoice([
				'invoice' => 1,
			]);
		}, AuthorizationException::class);

		$qrCode = $this->fapiClient->invoices->generateQrCode([
			'invoice' => $invoice['id'],
		]);
		Assert::type('string', $qrCode);

		$this->fapiClient->invoices->delete($invoice['id']);

		Assert::null($this->fapiClient->invoices->find($invoice['id']));
		Assert::null($this->fapiClient->invoices->getPdf($invoice['id']));
	}

}

(new FapiClientInvoicesTest())->run();
