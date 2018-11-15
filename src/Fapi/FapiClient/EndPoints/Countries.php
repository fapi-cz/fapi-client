<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\FapiClient\Rest\FapiRestClientOptions;

final class Countries extends EndPoint
{

	public function __construct(FapiRestClient $client)
	{
		parent::__construct($client, '/countries');
	}

	/**
	 * @param mixed[] $parameters
	 * @return string[]
	 */
	public function getCountries(array $parameters = []): array
	{
		$options = FapiRestClientOptions::STRING_RESOURCE;

		return $this->client->getResources($this->path, 'countries', $parameters, $options);
	}

}
