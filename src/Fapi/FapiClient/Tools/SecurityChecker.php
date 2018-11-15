<?php
declare(strict_types = 1);

final class SecurityChecker
{

	public static function isValid(array $invoice, int $time, string $expectedSecurity): bool
	{
		$id = $invoice['id'] ?? null;
		$number = $invoice['number'] ?? null;

		if ($id === null || $number === null) {
			return false;
		}

		$itemsSecurityHash = '';
		$items = $invoice['items'] ?? [];

		foreach ($items as $item) {
			$itemsSecurityHash .= \md5($item['id'] . $item['name']);
		}

		return $expectedSecurity === \sha1($time . $id . $number . $itemsSecurityHash);
	}

}
