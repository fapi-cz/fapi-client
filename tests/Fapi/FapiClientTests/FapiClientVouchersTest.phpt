<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;
use const LOCKS_DIR;

require __DIR__ . '/../../bootstrap.php';

class FapiClientVouchersTest extends TestCase
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
			__DIR__ . '/MockHttpClients/FapiClientVouchersMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientVouchersMockHttpClient'
		);

		$this->fapiClient = new FapiClient(
			'slischka@test-fapi.cz',
			'AaleYCMwUdSZjgK02NTCiSEVC',
			'https://api.fapi.cz/',
			$this->httpClient
		);
	}

	protected function tearDown(): void
	{
		$this->httpClient->close();
	}

	public function testDefaults(): void
	{
		$voucher = $this->fapiClient->getVouchers()->find(1656);

		Assert::type('array', $voucher);
		Assert::type('int', $voucher['id']);
		Assert::same('ABUCRQ', $voucher['code']);
		Assert::same('valid', $voucher['status']);
		Assert::same('2021-03-31', $voucher['expiration_date']);

		$result = $this->fapiClient->getVouchers()->applyVoucher($voucher['code'], ['applicant' => [
			'email' => 'test@fapi.cz',
			'form_url' => 'https://xx.fapi.cz',
		]]);

		Assert::true($result['applied']);
		$voucher = $result['voucher'];

		Assert::type('array', $voucher);
		Assert::type('int', $voucher['id']);
		Assert::same('ABUCRQ', $voucher['code']);
		Assert::same('applied', $voucher['status']);
		Assert::same('2021-03-31', $voucher['expiration_date']);
		Assert::same('2021-03-11 17:44:35', $voucher['applied_on']);
	}

}

(new FapiClientVouchersTest())->run();
