<?php declare(strict_types = 1);

namespace Fapi\FapiClient\Tools;

use function md5;
use function sha1;

final class SecurityChecker
{

	/**
	 * @param array<mixed> $invoice
	 *
	 * @deprecated use isInvoiceSecurityValid instead
	 */
	public static function isValid(array $invoice, int $time, string $expectedSecurity): bool
	{
		return self::isInvoiceSecurityValid($invoice, $time, $expectedSecurity);
	}

	/**
	 * @param array<mixed> $invoice
	 */
	public static function isInvoiceSecurityValid(array $invoice, int $time, string $expectedSecurity): bool
	{
		$id = $invoice['id'] ?? null;
		$number = $invoice['number'] ?? null;

		if ($id === null || $number === null) {
			return false;
		}

		$itemsSecurityHash = '';
		$items = $invoice['items'] ?? [];

		foreach ($items as $item) {
			$itemsSecurityHash .= md5($item['id'] . $item['name']);
		}

		return $expectedSecurity === sha1($time . $id . $number . $itemsSecurityHash);
	}

	/**
	 * @param array<mixed> $voucher
	 * @param array<mixed> $itemTemplate
	 */
	public static function isVoucherSecurityValid(
		array $voucher,
		array $itemTemplate,
		int $time,
		string $expectedSecurity,
	): bool
	{
		$voucherId = $voucher['id'] ?? '';
		$voucherCode = $voucher['code'] ?? '';
		$itemSecurityHash = md5(($itemTemplate['id'] ?? '') . ($itemTemplate['code'] ?? ''));

		return $expectedSecurity === sha1($time . $voucherId . $voucherCode . $itemSecurityHash);
	}

}
