<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient creating, getting, updating and deleting item templates.
 *
 * @testCase Fapi\FapiClientTests\FapiClientItemTemplatesTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientItemTemplatesMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientItemTemplatesMockHttpClient.php';

class FapiClientItemTemplatesTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientItemTemplatesMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientItemTemplatesMockHttpClient();
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
			__DIR__ . '/MockHttpClients/FapiClientItemTemplatesMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientItemTemplatesMockHttpClient'
		);
	}

	public function testCreateGetUpdateAndDeleteItemTemplates()
	{
		$itemTemplate = $this->fapiClient->itemTemplates->create([
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

		$itemTemplates = $this->fapiClient->itemTemplates->findAll();

		Assert::type('array', $itemTemplates);
		Assert::type('array', $itemTemplates[0]);
		Assert::type('int', $itemTemplates[0]['id']);

		Assert::same($itemTemplate, $this->fapiClient->itemTemplates->find($itemTemplate['id']));

		$updatedItemTemplate = $this->fapiClient->itemTemplates->update($itemTemplate['id'], [
			'name' => 'Updated Item Template',
		]);

		Assert::type('array', $updatedItemTemplate);
		Assert::same($itemTemplate['id'], $updatedItemTemplate['id']);
		Assert::same('Updated Item Template', $updatedItemTemplate['name']);

		$this->fapiClient->itemTemplates->delete($itemTemplate['id']);

		Assert::null($this->fapiClient->itemTemplates->find($itemTemplate['id']));

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient) {
			$fapiClient->itemTemplates->find(4);
		}, 'Fapi\FapiClient\AuthorizationException', 'You are not authorized for this action.');
	}

}

(new FapiClientItemTemplatesTest())->run();
