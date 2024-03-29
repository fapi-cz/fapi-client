<?php declare(strict_types = 1);

namespace Fapi\ToolsTest;

use Fapi\FapiClient\Tools\SecurityChecker;
use Tester\Assert;
use Tester\TestCase;

require_once __DIR__ . '/../../bootstrap.php';

final class SecurityCheckerTest extends TestCase
{

	/**
	 * @param array<mixed> $invoice
	 *
	 * @dataProvider getIsInvoiceSecurityValid
	 */
	public function testIsInvoiceSecurityValid(array $invoice, int $time, string $expectedSecurity): void
	{
		Assert::true(SecurityChecker::isValid($invoice, $time, $expectedSecurity));
	}

	/**
	 * @param array<mixed> $invoice
	 *
	 * @dataProvider getIsInvoiceSecurityInvalid
	 */
	public function testIsInvoiceSecurityInvalid(array $invoice, int $time, string $expectedSecurity): void
	{
		Assert::false(SecurityChecker::isValid($invoice, $time, $expectedSecurity));
	}

	/**
	 * @param array<mixed> $voucher
	 * @param array<mixed> $itemTemplate
	 *
	 * @dataProvider getIsVoucherSecurityValid
	 */
	public function testIsVoucherSecurityValid(
		array $voucher,
		array $itemTemplate,
		int $time,
		string $expectedSecurity,
	): void
	{
		Assert::true(SecurityChecker::isVoucherSecurityValid($voucher, $itemTemplate, $time, $expectedSecurity));
	}

	/**
	 * @param array<mixed> $voucher
	 * @param array<mixed> $itemTemplate
	 *
	 * @dataProvider getIsVoucherSecurityInvalid
	 */
	public function testIsVoucherSecurityInvalid(
		array $voucher,
		array $itemTemplate,
		int $time,
		string $expectedSecurity,
	): void
	{
		Assert::false(SecurityChecker::isVoucherSecurityValid($voucher, $itemTemplate, $time, $expectedSecurity));
	}

	/**
	 * @return array<mixed>
	 */
	public function getIsInvoiceSecurityValid(): array
	{
		return [
			[
				'invoice' => [
					'id' => 183488476,
					'number' => 1801108909,
					'items' => [
						[
							'id' => '6044430',
							'name' => 'SmartEmailing - do 1.000 kontaktů',
						],
						[
							'id' => '6044431',
							'name' => 'Zaokrouhlení',
						],
					],
				],
				'time' => 1542298656,
				'expectedSecurity' => '35221e0d0168d282edc3768ed4b4e878dec3c921',
			],
		];
	}

	/**
	 * @return array<mixed>
	 */
	public function getIsInvoiceSecurityInvalid(): array
	{
		return [
			[
				'invoice' => [
					'id' => 183488476,
				],
				'time' => 1542298656,
				'expectedSecurity' => '35221e0d0168d282edc3768ed4b4e878dec3c921',
			],
			[
				'invoice' => [
					'number' => 183488476,
				],
				'time' => 1542298656,
				'expectedSecurity' => '35221e0d0168d282edc3768ed4b4e878dec3c921',
			],
			[
				'invoice' => [],
				'time' => 1542298656,
				'expectedSecurity' => '35221e0d0168d282edc3768ed4b4e878dec3c921',
			],
		];
	}

	/**
	 * @return array<mixed>
	 */
	public function getIsVoucherSecurityValid(): array
	{
		return [
			[
				'voucher' => [
					'id' => 102,
					'code' => 'ZQSDP3',
				],
				'itemTemplate' => [
					'id' => 1,
					'code' => 'STARTY',
				],
				'time' => 1617179013,
				'expectedSecurity' => 'cf7550d28d2015944992225ae3a42752608060b7',
			],
		];
	}

	/**
	 * @return array<mixed>
	 */
	public function getIsVoucherSecurityInvalid(): array
	{
		return [
			[
				'voucher' => [
					'id' => 1,
					'code' => 'ABCD',
				],
				'itemTemplate' => [
					'id' => 1,
					'code' => 'test',
				],
				'time' => 1542298656,
				'expectedSecurity' => '35221e0d0168d282edc3768ed4b4e878dec3c921',
			],
			[
				'voucher' => [],
				'itemTemplate' => [],
				'time' => 1542298656,
				'expectedSecurity' => '35221e0d0168d282edc3768ed4b4e878dec3c921',
			],
		];
	}

}

(new SecurityCheckerTest())->run();
