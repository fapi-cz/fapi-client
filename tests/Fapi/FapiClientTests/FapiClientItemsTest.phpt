<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClient\NotFoundException;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';

class FapiClientItemsTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientItemsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientItemsMockHttpClient'
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

	public function testCreateGetUpdateAndDeleteItemTemplates()
	{
		$item = $this->fapiClient->items->create([
			'invoice' => 183480795,
			'name' => 'Sample Item Template',
			'price' => 10.0,
			'count' => 1,
		]);

		Assert::type('array', $item);
		Assert::type('int', $item['id']);
		Assert::same('Sample Item Template', $item['name']);

		$item = $this->fapiClient->items->update($item['id'], [
			'count' => 2,
		]);

		Assert::type('array', $item);
		Assert::type('array', $item);
		Assert::equal(2, $item['count']);

		$this->fapiClient->items->delete($item['id']);

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient, $item) {
			$fapiClient->items->update($item['id'], []);
		}, NotFoundException::class, 'Specified resource does not exist.');
	}

}

(new FapiClientItemsTest())->run();
