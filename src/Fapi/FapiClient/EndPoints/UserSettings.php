<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\FapiClient\Rest\FapiRestClientOptions;

final class UserSettings
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/user-settings';
	}

	/**
	 * @return string[]
	 */
	public function countryCurrencySetting(): array
	{
		return $this->client->getResources($this->path . '/country-currency-setting', 'country_currency_setting', [], FapiRestClientOptions::STRING_RESOURCE);
	}

}
