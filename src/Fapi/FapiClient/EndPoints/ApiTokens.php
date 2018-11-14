<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class ApiTokens
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/api-tokens';
	}

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]
	 */
	public function findAll(array $parameters = []): array
	{
		return $this->client->getResources($this->path, 'api_tokens', $parameters);
	}

	/**
	 * @return mixed[]|null
	 */
	public function find(int $id)
	{
		return $this->client->getResource($this->path, $id);
	}

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function create(array $data): array
	{
		return $this->client->createResource($this->path, $data);
	}

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function update(int $id, array $data): array
	{
		return $this->client->updateResource($this->path, $id, $data);
	}

	public function delete(int $id)
	{
		$this->client->deleteResource($this->path, $id);

	}

}
