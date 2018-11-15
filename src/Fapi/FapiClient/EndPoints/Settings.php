<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\FapiClient\Rest\FapiRestClientOptions;

final class Settings
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/settings';
	}

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]
	 */
	public function findAll(array $parameters = []): array
	{
		$options = FapiRestClientOptions::STRING_RESOURCE;

		return $this->client->getResources($this->path, 'settings', $parameters, $options);
	}

	public function find(string $key)
	{
		return $this->client->getResource($this->path, $key, [], FapiRestClientOptions::STRING_KEY);
	}

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function create(array $data): array
	{
		return $this->client->createResource($this->path, $data, FapiRestClientOptions::STRING_KEY);
	}

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function update(string $key, array $data): array
	{
		return $this->client->updateResource($this->path, $key, $data, FapiRestClientOptions::STRING_KEY);
	}

	public function delete(string $key)
	{
		$this->client->deleteResource($this->path, $key);

	}

}
