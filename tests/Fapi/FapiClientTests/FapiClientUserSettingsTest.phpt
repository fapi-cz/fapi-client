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

class FapiClientUserSettingsTest extends TestCase
{

	private CapturingHttpClient $httpClient;

	private FapiClient $fapiClient;

	protected function setUp(): void
	{
		Environment::lock('FapiClient', LOCKS_DIR);

		$this->httpClient = new CapturingHttpClient(
			new GuzzleHttpClient(),
			__DIR__ . '/MockHttpClients/FapiClientUserSettingsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientUserSettingsMockHttpClient',
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
		$countryCurrencySetting = $this->fapiClient->getUserSetting()->countryCurrencySetting();

		Assert::type('array', $countryCurrencySetting);
		Assert::equal(['*' => 'EUR', 'CZ' => 'CZK'], $countryCurrencySetting);
	}

}

(new FapiClientUserSettingsTest())->run();
