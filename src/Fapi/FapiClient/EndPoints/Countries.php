<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\FapiClient\Rest\FapiRestClientOptions;

final class Countries
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/countries';
	}

	/**
	 * @param array<mixed> $parameters
	 * @return array<string>
	 */
	public function findAll(array $parameters = []): array
	{
		$options = FapiRestClientOptions::STRING_RESOURCE;

		return $this->client->getResources($this->path, 'countries', $parameters, $options);
	}

}
