<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\AuthorizationException;
use Fapi\FapiClient\FapiClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';

class FapiClientFormsTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientFormsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientFormsMockHttpClient'
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

	public function testCreateGetUpdateAndDeleteForms()
	{
		$form = $this->fapiClient->forms->create([
			'name' => 'Sample Form',
			'project' => 23371,
			'series' => 21979,
			'message_template_set' => 15905,
			'reminder_set' => 12291,
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

		$forms = $this->fapiClient->forms->findAll();

		Assert::type('array', $forms);
		Assert::type('array', $forms[0]);
		Assert::type('int', $forms[0]['id']);

		Assert::same($form, $this->fapiClient->forms->find($form['id']));

		$form = $this->fapiClient->forms->find($form['id'], [
			'with_payment_methods' => true,
		]);
		Assert::type('array', $form['payment_methods']);
		Assert::count(2, $form['payment_methods']);

		$updatedForm = $this->fapiClient->forms->update($form['id'], [
			'name' => 'Updated Form',
			'deleted' => true,
		]);

		Assert::type('array', $updatedForm);
		Assert::same($form['id'], $updatedForm['id']);
		Assert::same('Updated Form', $updatedForm['name']);
		Assert::true($updatedForm['deleted']);

		Assert::null($this->fapiClient->forms->find(899261310));

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient) {
			$fapiClient->forms->find(2);
		}, AuthorizationException::class, 'You are not authorized for this action.');
	}

}

(new FapiClientFormsTest())->run();
