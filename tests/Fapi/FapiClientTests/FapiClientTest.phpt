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

class FapiClientTest extends TestCase
{

	private CapturingHttpClient $httpClient;

	private FapiClient $fapiClient;

	protected function setUp(): void
	{
		Environment::lock('FapiClient', LOCKS_DIR);

		$this->httpClient = new CapturingHttpClient(
			new GuzzleHttpClient(),
			__DIR__ . '/MockHttpClients/FapiClientMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientMockHttpClient',
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

	public function testGetCurrentUser(): void
	{
		$this->fapiClient->checkConnection();

		$this->setInvalidPassword();

		Assert::exception(function (): void {
			$this->fapiClient->checkConnection();
		}, AuthorizationException::class, 'Invalid password.');

		$this->setInvalidUsername();

		Assert::exception(function (): void {
			$this->fapiClient->checkConnection();
		}, AuthorizationException::class, 'Invalid password.');
	}

	private function setInvalidPassword(): void
	{
		$this->fapiClient = new FapiClient(
			'slischka@test-fapi.cz',
			'xxx',
			'https://api.fapi.cz/',
			$this->httpClient,
		);
	}

	private function setInvalidUsername(): void
	{
		$this->fapiClient = new FapiClient(
			'-@-.cz',
			'xxx',
			'https://api.fapi.cz/',
			$this->httpClient,
		);
	}

}

(new FapiClientTest())->run();
