<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;
use function print_r;

require __DIR__ . '/../../bootstrap.php';

class FapiClientItemTemplatesTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientItemTemplatesMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientItemTemplatesMockHttpClient'
		);

		$this->fapiClient = new FapiClient(
			'slischka@test-fapi.cz',
			'jIBAWlKzzB6rQVk5Y3T0VxTgn',
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
		$itemTemplate = $this->fapiClient->getItemTemplates()->create([
			'name' => 'Sample Item Template',
			'count' => 1,
			'prices' => [
				[
					'type' => 'one_time',
					'currency_code' => 'CZK',
					'price' => 150,
				],
			],
		]);

		Assert::type('array', $itemTemplate);
		Assert::type('int', $itemTemplate['id']);
		Assert::type('array', $itemTemplate['prices']);
		Assert::count(1, $itemTemplate['prices']);
		Assert::same('Sample Item Template', $itemTemplate['name']);

		$itemTemplates = $this->fapiClient->getItemTemplates()->findAll();

		Assert::type('array', $itemTemplates);
		Assert::type('array', $itemTemplates[0]);
		Assert::type('int', $itemTemplates[0]['id']);

		Assert::same($itemTemplate, $this->fapiClient->getItemTemplates()->find($itemTemplate['id']));

		$updatedItemTemplate = $this->fapiClient->getItemTemplates()->update($itemTemplate['id'], [
			'name' => 'Updated Item Template',
		]);

		Assert::type('array', $updatedItemTemplate);
		Assert::same($itemTemplate['id'], $updatedItemTemplate['id']);
		Assert::same('Updated Item Template', $updatedItemTemplate['name']);

		$this->fapiClient->getItemTemplates()->delete($itemTemplate['id']);

		Assert::null($this->fapiClient->getItemTemplates()->find($itemTemplate['id']));
		Assert::null($this->fapiClient->getItemTemplates()->find(4));
	}

}

(new FapiClientItemTemplatesTest())->run();
