<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClient\NotFoundException;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;
use const LOCKS_DIR;

require __DIR__ . '/../../bootstrap.php';

class FapiClientItemsTest extends TestCase
{

	/** @var CapturingHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp(): void
	{
		Environment::lock('FapiClient', LOCKS_DIR);

		$this->httpClient = new CapturingHttpClient(
			new GuzzleHttpClient(),
			__DIR__ . '/MockHttpClients/FapiClientItemsMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientItemsMockHttpClient'
		);

		$this->fapiClient = new FapiClient(
			'slischka@test-fapi.cz',
			'jIBAWlKzzB6rQVk5Y3T0VxTgn',
			'https://api.fapi.cz/',
			$this->httpClient
		);
	}

	protected function tearDown(): void
	{
		$this->httpClient->close();
	}

	public function testCreateGetUpdateAndDeleteItemTemplates(): void
	{
		$item = $this->fapiClient->getItems()->create([
			'invoice' => 185993795,
			'name' => 'Sample Item Template',
			'price' => 10.0,
			'count' => 1,
		]);

		Assert::type('array', $item);
		Assert::type('int', $item['id']);
		Assert::same('Sample Item Template', $item['name']);

		$item = $this->fapiClient->getItems()->update($item['id'], [
			'count' => 2,
		]);

		Assert::type('array', $item);
		Assert::type('array', $item);
		Assert::equal(2, $item['count']);

		$this->fapiClient->getItems()->delete($item['id']);

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient, $item): void {
			$fapiClient->getItems()->update($item['id'], []);
		}, NotFoundException::class, 'Specified resource does not exist.');
	}

}

(new FapiClientItemsTest())->run();
