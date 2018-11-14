<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient::getCurrentUser()
 *
 * @testCase Fapi\FapiClientTests\FapiClientCurrentUserTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientCurrentUserMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientCurrentUserMockHttpClient.php';


class FapiClientCurrentUserTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientCurrentUserMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;


	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientCurrentUserMockHttpClient();
		}

		$this->fapiClient = new FapiClient(
			'tester',
			'xxx',
			'http://api.fapi.cz.l/',
			$this->httpClient
		);
	}


	protected function tearDown()
	{
		if (!$this->generateMockHttpClient) {
            return;
        }

        $this->httpClient->writeToPhpFile(
            __DIR__ . '/MockHttpClients/FapiClientCurrentUserMockHttpClient.php',
            'Fapi\FapiClientTests\MockHttpClients\FapiClientCurrentUserMockHttpClient'
        );
	}


	public function testCreateGetUpdateAndDeleteCurrentUser()
	{
		$user = $this->fapiClient->getCurrentUser();
		Assert::type('array', $user);
		Assert::type('int', $user['id']);
		Assert::same('tester', $user['username']);
	}

}


(new FapiClientCurrentUserTest())->run();
