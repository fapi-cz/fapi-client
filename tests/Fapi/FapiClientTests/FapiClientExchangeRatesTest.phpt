<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClient\ValidationException;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;
use const LOCKS_DIR;

require __DIR__ . '/../../bootstrap.php';

class FapiClientExchangeRatesTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientExchangeRatesMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientExchangeRatesMockHttpClient'
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

	public function testList(): void
	{
		Assert::exception(function (): void {
			$this->fapiClient->getExchangeRates()->list();
		}, ValidationException::class, 'Missing key: source');

		Assert::exception(function (): void {
			$this->fapiClient->getExchangeRates()->list(['source' => 'EUR']);
		}, ValidationException::class, 'Missing key: target');

		Assert::exception(function (): void {
			$this->fapiClient->getExchangeRates()->list(['source' => 'EUR', 'target' => 'CZK']);
		}, ValidationException::class, 'Parameter date_from and date_to can not be null together with parameter date.');

		$exchangeRates = $this->fapiClient->getExchangeRates()->list(
			['source' => 'EUR', 'target' => 'CZK', 'date' => '2020-09-08']
		);

		Assert::equal([
			[
				'date' => '2020-09-08',
				'source_currency' => 'EUR',
				'target_currency' => 'CZK',
				'exchange_rate' => 26.47,
			],
		], $exchangeRates);

		$exchangeRate = $this->fapiClient->getExchangeRates()->list(
			['source' => 'EUR', 'target' => 'CZK', 'date' => '2020-09-08', 'single' => true]
		);

		Assert::equal(
			[
				'date' => '2020-09-08',
				'source_currency' => 'EUR',
				'target_currency' => 'CZK',
				'exchange_rate' => 26.47,
			],
			$exchangeRate
		);

	}

}

(new FapiClientExchangeRatesTest())->run();
