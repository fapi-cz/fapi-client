<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';

class FapiClientUserSettingsTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientUserSettingsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientUserSettingsMockHttpClient'
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
		$countryCurrencySetting = $this->fapiClient->getUserSetting()->countryCurrencySetting();

		Assert::type('array', $countryCurrencySetting);
		Assert::equal([
			'*' => 'EUR',
			'CZ' => 'CZK',
			'PL' => 'PLN',
			'RU' => 'RUB',
		], $countryCurrencySetting);
	}

}

(new FapiClientUserSettingsTest())->run();
