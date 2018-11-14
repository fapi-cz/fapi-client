<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient creating, getting, updating and deleting clients.
 *
 * @testCase Fapi\FapiClientTests\FapiClientClientsTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\AuthorizationException;
use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientClientsMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientClientsMockHttpClient.php';

class FapiClientClientsTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientClientsMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientClientsMockHttpClient();
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
			__DIR__ . '/MockHttpClients/FapiClientClientsMockHttpClient.php',
			FapiClientClientsMockHttpClient::class
		);
	}

	public function testCreateGetUpdateAndDeleteClients()
	{
		$client = $this->fapiClient->clients->create([
			'email' => 'test-Fapi@fabik.org',
		]);

		Assert::type('array', $client);
		Assert::type('int', $client['id']);
		Assert::same('test-Fapi@fabik.org', $client['email']);

		$clients = $this->fapiClient->clients->findAll([
			'email' => 'test-Fapi@fabik.org',
			'limit' => 1,
		]);

		Assert::type('array', $clients);
		Assert::count(1, $clients);
		Assert::same($client, $clients[0]);

		Assert::same($client, $this->fapiClient->clients->find($client['id']));

		$updatedClient = $this->fapiClient->clients->update($client['id'], [
			'email' => 'test-Fapi-2@fabik.org',
		]);

		Assert::type('array', $updatedClient);
		Assert::same($client['id'], $updatedClient['id']);
		Assert::same('test-Fapi-2@fabik.org', $updatedClient['email']);

		$this->fapiClient->clients->delete($client['id']);

		Assert::null($this->fapiClient->clients->find($client['id']));

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient) {
			$fapiClient->clients->find(1);
		}, AuthorizationException::class, 'You are not authorized for this action.');
	}

}

(new FapiClientClientsTest())->run();
