<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;
use const LOCKS_DIR;

require __DIR__ . '/../../bootstrap.php';

class FapiClientCountriesTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientCountriesMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientCountriesMockHttpClient'
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

	public function testGetAndUpdateCountries(): void
	{
		$countries = $this->fapiClient->getCountries()->findAll();

		Assert::type('array', $countries);
		Assert::same('Česká republika', $countries['CZ']);
	}

}

(new FapiClientCountriesTest())->run();
