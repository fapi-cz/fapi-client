<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient creating, getting, updating and deleting settings.
 *
 * @testCase Fapi\FapiClientTests\FapiClientSettingsTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientSettingsMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientSettingsMockHttpClient.php';

class FapiClientSettingsTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientSettingsMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientSettingsMockHttpClient();
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
			__DIR__ . '/MockHttpClients/FapiClientSettingsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientSettingsMockHttpClient'
		);
	}

	public function testGetAndUpdateSettings()
	{
		$setting = $this->fapiClient->settings->create([
			'key' => 'sample_setting',
			'value' => 'foo',
		]);

		Assert::type('array', $setting);
		Assert::same('foo', $setting['value']);

		$settings = $this->fapiClient->settings->findAll();

		Assert::type('array', $settings);
		Assert::same('foo', $settings['sample_setting']);

		Assert::same($setting, $this->fapiClient->settings->find('sample_setting'));

		$updatedSetting = $this->fapiClient->settings->update('sample_setting', [
			'value' => 'bar',
		]);

		Assert::type('array', $updatedSetting);
		Assert::same('bar', $updatedSetting['value']);

		$this->fapiClient->settings->delete('sample_setting');

		Assert::null($this->fapiClient->settings->find('sample_setting'));
	}

}

(new FapiClientSettingsTest())->run();
