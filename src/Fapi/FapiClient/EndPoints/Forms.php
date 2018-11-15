<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class Forms extends EndPoint
{

	public function __construct(FapiRestClient $client)
	{
		parent::__construct($client, '/forms');
	}

	/**
	 * @param mixed[] $parameters
	 * @return mixed[][]
	 */
	public function findAll(array $parameters = []): array
	{
		return $this->client->getResources($this->path, 'forms', $parameters);
	}

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]|null
	 */
	public function find(int $id, array $parameters = [])
	{
		return $this->client->getResource($this->path, $id, $parameters);
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

}
