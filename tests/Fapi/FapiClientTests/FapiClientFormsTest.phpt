<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient creating, getting, updating and deleting forms.
 *
 * @testCase Fapi\FapiClientTests\FapiClientFormsTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\AuthorizationException;
use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientFormsMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientFormsMockHttpClient.php';

class FapiClientFormsTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientFormsMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientFormsMockHttpClient();
		}

		$this->fapiClient = new FapiClient(
			'test1@slischka.cz',
			'pi120wrOyzNlb7p4iQwTO1vcK',
			'https://api.fapi.cz/',
			$this->httpClient
		);
	}

	protected function tearDown()
	{
		if (!$this->generateMockHttpClient) {
			return;
		}

		$this->httpClient->writeToPhpFile(
			__DIR__ . '/MockHttpClients/FapiClientFormsMockHttpClient.php',
			FapiClientFormsMockHttpClient::class
		);
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
