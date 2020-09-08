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

class FapiClientOrdersTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientOrdersMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientOrdersMockHttpClient'
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

	public function testCreateGetAndUpdateOrders()
	{
		$createdOrder = $this->fapiClient->getOrders()->create([
			'form' => 60693,

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
		Assert::same(60693, $createdOrder['form']);
		Assert::true($createdOrder['pending']);

		$order = $this->fapiClient->getOrders()->find($createdOrder['id']);

		Assert::type('array', $order);
		Assert::same($createdOrder['id'], $order['id']);
		Assert::true($order['pending']);

		$updatedOrder = $this->fapiClient->getOrders()->update($createdOrder['id'], [
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
