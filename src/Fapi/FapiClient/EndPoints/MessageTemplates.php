<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class MessageTemplates extends EndPoint
{

	public function __construct(FapiRestClient $client)
	{
		parent::__construct($client, '/message-templates');
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
	public function update(int $id, array $data): array
	{
		return $this->client->updateResource($this->path, $id, $data);
	}

	public function delete(int $id)
	{
		$this->client->deleteResource($this->path, $id);
	}

}
