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

class FapiClientTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientMockHttpClient'
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

	public function testGetCurrentUser()
	{
		$this->fapiClient->checkConnection();

		$this->setInvalidPassword();

		Assert::exception(function () {
			$this->fapiClient->checkConnection();
		}, AuthorizationException::class, 'Invalid password.');

		$this->setInvalidUsername();

		Assert::exception(function () {
			$this->fapiClient->checkConnection();
		}, AuthorizationException::class, 'Invalid username.');
	}

	private function setInvalidPassword()
	{
		$this->fapiClient = new FapiClient(
			'test1@slischka.cz',
			'xxx',
			'https://api.fapi.cz/',
			$this->httpClient
		);
	}

	private function setInvalidUsername()
	{
		$this->fapiClient = new FapiClient(
			'-@-.cz',
			'xxx',
			'https://api.fapi.cz/',
			$this->httpClient
		);
	}

}

(new FapiClientTest())->run();
