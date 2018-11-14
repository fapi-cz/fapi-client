<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient getting and updating users.
 *
 * @testCase Fapi\FapiClientTests\FapiClientUsersTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientUserMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientUserMockHttpClient.php';

class FapiClientUserTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientUserMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientUserMockHttpClient();
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
			__DIR__ . '/MockHttpClients/FapiClientUserMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientUserMockHttpClient'
		);
	}

	public function testGetCurrentUser()
	{
		$user = $this->fapiClient->getCurrentUser();

		Assert::type('array', $user);
	}

}

(new FapiClientUserTest())->run();
