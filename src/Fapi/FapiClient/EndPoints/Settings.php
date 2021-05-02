<?php declare(strict_types = 1);

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
	 * @param array<mixed> $parameters
	 * @return array<mixed>
	 */
	public function findAll(array $parameters = []): array
	{
		$options = FapiRestClientOptions::STRING_RESOURCE;

		return $this->client->getResources($this->path, 'settings', $parameters, $options);
	}

	/**
	 * @return array<mixed>|null
	 */
	public function find(string $key): ?array
	{
		return $this->client->getResource($this->path, $key, [], FapiRestClientOptions::STRING_KEY);
	}

	/**
	 * @param array<mixed> $data
	 * @return array<mixed>
	 */
	public function create(array $data): array
	{
		return $this->client->createResource($this->path, $data, FapiRestClientOptions::STRING_KEY);
	}

	/**
	 * @param array<mixed> $data
	 * @return array<mixed>
	 */
	public function update(string $key, array $data): array
	{
		return $this->client->updateResource($this->path, $key, $data, FapiRestClientOptions::STRING_KEY);
	}

	public function delete(string $key): void
	{
		$this->client->deleteResource($this->path, $key);

	}

}
