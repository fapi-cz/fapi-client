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

class FapiClientStatisticsTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientStatisticsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientStatisticsMockHttpClient'
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

	public function testGetTotalStatistics()
	{
		$statistics = $this->fapiClient->getStatistics()->getTotalStatistics([
			'type' => 'daily',
			'start' => '2018-01-01',
			'end' => '2018-12-31',
			'including_vat' => false,
		]);

		Assert::type('array', $statistics);
		Assert::type('array', $statistics['issued']);
	}

}

(new FapiClientStatisticsTest())->run();
