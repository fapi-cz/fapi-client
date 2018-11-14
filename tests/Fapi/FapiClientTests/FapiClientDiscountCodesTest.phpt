<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientDiscountCodesMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientDiscountCodesMockHttpClient.php';

class FapiClientDiscountCodesTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientDiscountCodesMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientDiscountCodesMockHttpClient();
		}

		$this->fapiClient = new FapiClient(
			'tester',
			'xxx',
			'api.fapi.cz/',
			$this->httpClient
		);
	}

	protected function tearDown()
	{
		if (!$this->generateMockHttpClient) {
			return;
		}

		$this->httpClient->writeToPhpFile(
			__DIR__ . '/MockHttpClients/FapiClientDiscountCodesMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientDiscountCodesMockHttpClient'
		);
	}

	public function testCreateGetUpdateAndDeleteDiscountCode()
	{
		$createData = [
			'name' => 'test',
			'code' => 'unique',
			'type' => 'percent',
			'validity_type' => 'always',
			'percent_discount' => 5,
		];
		$updateData = [
			'name' => 'new name',
			'code' => 'newUniqCode',
			'percent_discount' => 10,
			'validity_type' => 'range',
			'begin_date' => '2017-01-01',
		];
		//create
		$discountCode = $this->fapiClient->discountCodes->create($createData);
		Assert::type('array', $discountCode);
		Assert::type('int', $discountCode['id']);
		Assert::equal($createData['code'], $discountCode['code']);
		Assert::equal($createData['name'], $discountCode['name']);
		Assert::equal($createData['validity_type'], $discountCode['validity_type']);
		Assert::equal($createData['percent_discount'], $discountCode['percent_discount']);

		//update
		$discountCode = $this->fapiClient->discountCodes->update($discountCode['id'], $updateData);
		Assert::type('int', $discountCode['id']);
		Assert::equal($updateData['code'], $discountCode['code']);
		Assert::equal($updateData['name'], $discountCode['name']);
		Assert::equal($updateData['percent_discount'], $discountCode['percent_discount']);
		Assert::equal($updateData['begin_date'], $discountCode['begin_date']);

		//show
		$discountCode = $this->fapiClient->discountCodes->find($discountCode['id']);
		Assert::type('int', $discountCode['id']);
		Assert::type('array', $discountCode);

		//list
		$discountCodes = $this->fapiClient->discountCodes->findAll();
		Assert::type('int', $discountCodes[0]['id']);
		Assert::type('array', $discountCodes);

		//delete
		$this->fapiClient->discountCodes->delete($discountCode['id']);
	}

}

(new FapiClientDiscountCodesTest())->run();
