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

class FapiClientClientsTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientClientsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientClientsMockHttpClient'
		);

		$this->fapiClient = new FapiClient(
			'slischka@test-fapi.cz',
			'jIBAWlKzzB6rQVk5Y3T0VxTgn',
			'https://api.fapi.cz/',
			$this->httpClient
		);
	}

	protected function tearDown()
	{
		$this->httpClient->close();
	}

	public function testCreateGetUpdateAndDeleteClients()
	{
		$client = $this->fapiClient->getClients()->create([
			'email' => 'test-Fapi@fabik.org',
		]);

		Assert::type('array', $client);
		Assert::type('int', $client['id']);
		Assert::same('test-Fapi@fabik.org', $client['email']);

		$clients = $this->fapiClient->getClients()->findAll([
			'email' => 'test-Fapi@fabik.org',
			'limit' => 1,
		]);

		Assert::type('array', $clients);
		Assert::count(1, $clients);
		Assert::same($client, $clients[0]);

		Assert::same($client, $this->fapiClient->getClients()->find($client['id']));

		$updatedClient = $this->fapiClient->getClients()->update($client['id'], [
			'email' => 'test-Fapi-2@fabik.org',
		]);

		Assert::type('array', $updatedClient);
		Assert::same($client['id'], $updatedClient['id']);
		Assert::same('test-Fapi-2@fabik.org', $updatedClient['email']);

		$this->fapiClient->getClients()->delete($client['id']);

		Assert::null($this->fapiClient->getClients()->find($client['id']));

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient) {
			$fapiClient->getClients()->find(1);
		}, AuthorizationException::class, 'You are not authorized for this action.');
	}

}

(new FapiClientClientsTest())->run();
