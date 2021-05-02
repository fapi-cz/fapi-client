<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\AuthorizationException;
use Fapi\FapiClient\FapiClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;
use const LOCKS_DIR;

require __DIR__ . '/../../bootstrap.php';

class FapiClientFormsTest extends TestCase
{

	/** @var CapturingHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp(): void
	{
		Environment::lock('FapiClient', LOCKS_DIR);

		$this->httpClient = new CapturingHttpClient(
			new GuzzleHttpClient(),
			__DIR__ . '/MockHttpClients/FapiClientFormsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientFormsMockHttpClient'
		);

		$this->fapiClient = new FapiClient(
			'slischka@test-fapi.cz',
			'jIBAWlKzzB6rQVk5Y3T0VxTgn',
			'https://api.fapi.cz/',
			$this->httpClient
		);
	}

	protected function tearDown(): void
	{
		$this->httpClient->close();
	}

	public function testCreateGetUpdateAndDeleteForms(): void
	{
		$form = $this->fapiClient->getForms()->create([
			'name' => 'Sample Form',
			'project' => 31862,
			'series' => 38504,
			'message_template_set' => 22232,
			'reminder_set' => 16508,
			'currency' => 'by-country',
			'reverse_charge' => 'disabled',
			'thanks_content' => '',
			'error_content' => '',
			'allow_wire' => true,
			'allow_cash' => true,
		]);

		Assert::type('array', $form);
		Assert::type('int', $form['id']);
		Assert::same('Sample Form', $form['name']);
		Assert::false($form['deleted']);

		$forms = $this->fapiClient->getForms()->findAll();

		Assert::type('array', $forms);
		Assert::type('array', $forms[0]);
		Assert::type('int', $forms[0]['id']);

		Assert::same($form, $this->fapiClient->getForms()->find($form['id']));

		$form = $this->fapiClient->getForms()->find($form['id'], [
			'with_payment_methods' => true,
		]);
		Assert::type('array', $form['payment_methods']);
		Assert::count(2, $form['payment_methods']);

		$updatedForm = $this->fapiClient->getForms()->update($form['id'], [
			'name' => 'Updated Form',
			'deleted' => true,
		]);

		Assert::type('array', $updatedForm);
		Assert::same($form['id'], $updatedForm['id']);
		Assert::same('Updated Form', $updatedForm['name']);
		Assert::true($updatedForm['deleted']);

		Assert::null($this->fapiClient->getForms()->find(899261310));

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient): void {
			$fapiClient->getForms()->find(2);
		}, AuthorizationException::class, 'You are not authorized for this action.');
	}

}

(new FapiClientFormsTest())->run();
