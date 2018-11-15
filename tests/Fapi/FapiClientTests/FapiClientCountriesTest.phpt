<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient::getCountries()
 *
 * @testCase Fapi\FapiClientTests\FapiClientCountriesTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientCountriesMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientCountriesMockHttpClient.php';


class FapiClientCountriesTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientCountriesMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;


	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientCountriesMockHttpClient();
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
            __DIR__ . '/MockHttpClients/FapiClientCountriesMockHttpClient.php',
            'Fapi\FapiClientTests\MockHttpClients\FapiClientCountriesMockHttpClient'
        );
	}


	public function testGetAndUpdateCountries()
	{
		$countries = $this->fapiClient->countries->findAll();

		Assert::type('array', $countries);
		Assert::same('Česká republika', $countries['CZ']);
	}

}


(new FapiClientCountriesTest())->run();
