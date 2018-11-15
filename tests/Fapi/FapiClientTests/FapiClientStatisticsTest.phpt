<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient::getTotalStatistics()
 *
 * @testCase Fapi\FapiClientTests\FapiClientStatisticsTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientStatisticsMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientStatisticsMockHttpClient.php';


class FapiClientStatisticsTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientStatisticsMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;


	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientStatisticsMockHttpClient();
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
            __DIR__ . '/MockHttpClients/FapiClientStatisticsMockHttpClient.php',
            'Fapi\FapiClientTests\MockHttpClients\FapiClientStatisticsMockHttpClient'
        );
	}


	public function testGetTotalStatistics()
	{
		$statistics = $this->fapiClient->statistics->getTotalStatistics(array(
			'type' => 'daily',
			'start' => '2018-01-01',
			'end' => '2018-12-31',
			'including_vat' => false,
		));

		Assert::type('array', $statistics);
		Assert::type('array', $statistics['issued']);
	}

}


(new FapiClientStatisticsTest())->run();
