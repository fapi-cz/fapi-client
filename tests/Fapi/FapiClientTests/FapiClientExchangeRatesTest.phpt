<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClient\ValidationException;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';

class FapiClientExchangeRatesTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientExchangeRatesMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientExchangeRatesMockHttpClient'
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

	public function testList()
	{
		Assert::exception(function () {
			$this->fapiClient->exchangeRates->list();
		}, ValidationException::class, 'Parameter source is not valid.');

		Assert::exception(function () {
			$this->fapiClient->exchangeRates->list(['source' => 'EUR']);
		}, ValidationException::class, 'Parameter target is not valid.');

		Assert::exception(function () {
			$this->fapiClient->exchangeRates->list(['source' => 'EUR', 'target' => 'CZK']);
		}, ValidationException::class, 'Parameter date_from and date_to can not be null together with parameter date.');

		$exchangeRates = $this->fapiClient->exchangeRates->list(['source' => 'EUR', 'target' => 'CZK', 'date' => '2019-01-01']);

		Assert::equal([
			[
				'date' => '2019-01-01',
				'source_currency' => 'EUR',
				'target_currency' => 'CZK',
				'exchange_rate' => 25.725,
			],
		], $exchangeRates);

		$exchangeRate = $this->fapiClient->exchangeRates->list(['source' => 'EUR', 'target' => 'CZK', 'date' => '2019-01-01', 'single' => true]);

		Assert::equal(
			[
				'date' => '2019-01-01',
				'source_currency' => 'EUR',
				'target_currency' => 'CZK',
				'exchange_rate' => 25.725,
			]
			, $exchangeRate);

	}

}

(new FapiClientExchangeRatesTest())->run();
