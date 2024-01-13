<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\FapiClient\Rest\FapiRestClientOptions;

final class UserSettings
{

	private string $path;

	public function __construct(private FapiRestClient $client)
	{
		$this->path = '/user-settings';
	}

	/**
	 * @return array<string>
	 */
	public function countryCurrencySetting(): array
	{
		return $this->client->getResources(
			$this->path . '/country-currency-setting',
			'country_currency_setting',
			[],
			FapiRestClientOptions::STRING_RESOURCE,
		);
	}

}
