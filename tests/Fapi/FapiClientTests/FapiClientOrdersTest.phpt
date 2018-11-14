<?php
declare(strict_types = 1);

/**
 * Test: Fapi\FapiClient\FapiClient creating, getting and updating orders.
 *
 * @testCase Fapi\FapiClientTests\FapiClientOrdersTest
 */

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClientTests\MockHttpClients\FapiClientOrdersMockHttpClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';
require __DIR__ . '/MockHttpClients/FapiClientOrdersMockHttpClient.php';

class FapiClientOrdersTest extends TestCase
{

	/** @var bool */
	private $generateMockHttpClient = false;

	/** @var CapturingHttpClient|FapiClientOrdersMockHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		if ($this->generateMockHttpClient) {
			$this->httpClient = new CapturingHttpClient(new GuzzleHttpClient());
		} else {
			$this->httpClient = new FapiClientOrdersMockHttpClient();
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
			__DIR__ . '/MockHttpClients/FapiClientOrdersMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientOrdersMockHttpClient'
		);
	}

	public function testCreateGetAndUpdateOrders()
	{
		$createdOrder = $this->fapiClient->orders->create([
			'form' => 38771,

			'first_name' => 'John',
			'last_name' => 'Smith',
			'email' => 'john.smith@example.com',
			'phone' => '+420123456789',
			'company' => 'Sample Company Inc.',
			'ic' => '12345678',
			'dic' => 'CZ12345678',
			'address' => [
				'street' => 'Street',
				'city' => 'City',
				'zip' => '123 45',
				'country' => 'CZ',
			],
			'shipping_address' => [
				'name' => 'Sherlock',
				'surname' => 'Holmes',
				'street' => '221b Baker Street',
				'city' => 'London',
				'zip' => 'NW1 6XE',
				'country' => 'GB',
			],

			'items' => [
				[
					'name' => 'Sample Item',
					'price_czk' => 2700.00,
					'price_eur' => 100.00,
					'vat' => 21,
					'count' => 1,
					'including_vat' => false,
				],
			],

			'payment_type' => 'wire',
			'bank' => 'wire',

			'pending' => true,
		]);

		Assert::type('array', $createdOrder);
		Assert::type('int', $createdOrder['id']);
		Assert::same(38771, $createdOrder['form']);
		Assert::true($createdOrder['pending']);

		$order = $this->fapiClient->orders->find($createdOrder['id']);

		Assert::type('array', $order);
		Assert::same($createdOrder['id'], $order['id']);
		Assert::true($order['pending']);

		$updatedOrder = $this->fapiClient->orders->update($createdOrder['id'], [
			'pending' => false,
			'upsells' => [
				[
					'name' => 'Sample Upsell',
					'price_czk' => 270.00,
					'price_eur' => 10.00,
					'vat' => 21,
					'count' => 1,
					'including_vat' => false,
				],
			],
		]);

		Assert::type('array', $updatedOrder);
		Assert::same($createdOrder['id'], $updatedOrder['id']);
		Assert::false($updatedOrder['pending']);
	}

}

(new FapiClientOrdersTest())->run();
