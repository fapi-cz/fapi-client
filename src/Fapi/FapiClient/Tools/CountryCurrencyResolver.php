<?php declare(strict_types = 1);

namespace Fapi\FapiClient\Tools;

final class CountryCurrencyResolver
{

	/** @var array<string> */
	private $countryCurrencySetting;

	/**
	 * @param array<string> $countryCurrencySetting
	 */
	public function __construct(array $countryCurrencySetting)
	{
		$this->countryCurrencySetting = $countryCurrencySetting;
	}

	public function getCurrencyCode(string $countryCode): string
	{
		return $this->countryCurrencySetting[$countryCode] ?? $this->countryCurrencySetting['*'];
	}

}
