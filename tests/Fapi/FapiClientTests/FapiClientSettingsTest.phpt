<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient creating, getting, updating and deleting settings.
 *
 * @testCase Fapi\FapiClientTests\FapiClientSettingsTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';

class FapiClientSettingsTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientSettingsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientSettingsMockHttpClient'
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

	public function testGetAndUpdateSettings()
	{
		$setting = $this->fapiClient->getSettings()->create([
			'key' => 'sample_setting',
			'value' => 'foo',
		]);

		Assert::type('array', $setting);
		Assert::same('foo', $setting['value']);

		$settings = $this->fapiClient->getSettings()->findAll();

		Assert::type('array', $settings);
		Assert::same('foo', $settings['sample_setting']);

		Assert::same($setting, $this->fapiClient->getSettings()->find('sample_setting'));

		$updatedSetting = $this->fapiClient->getSettings()->update('sample_setting', [
			'value' => 'bar',
		]);

		Assert::type('array', $updatedSetting);
		Assert::same('bar', $updatedSetting['value']);

		$this->fapiClient->getSettings()->delete('sample_setting');

		Assert::null($this->fapiClient->getSettings()->find('sample_setting'));
	}

}

(new FapiClientSettingsTest())->run();
