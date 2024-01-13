<?php declare(strict_types = 1);

namespace Fapi\FapiClient\Tools;

final class CountryCurrencyResolver
{

	/**
	 * @param array<string> $countryCurrencySetting
	 */
	public function __construct(private array $countryCurrencySetting)
	{
	}

	public function getCurrencyCode(string $countryCode): string
	{
		return $this->countryCurrencySetting[$countryCode] ?? $this->countryCurrencySetting['*'];
	}

}
