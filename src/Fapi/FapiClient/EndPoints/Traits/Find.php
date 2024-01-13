<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

use Fapi\FapiClient\Rest\FapiRestClient;

trait Find
{

	private FapiRestClient $client;

	private string $path;

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>|null
	 */
	public function find(int $id, array $parameters = []): array|null
	{
		return $this->client->getResource($this->path, $id, $parameters);
	}

}
