<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

use Fapi\FapiClient\Rest\FapiRestClient;

trait Update
{

	private FapiRestClient $client;

	private string $path;

	/**
	 * @param array<mixed> $data
	 * @return array<mixed>
	 */
	public function update(int $id, array $data): array
	{
		return $this->client->updateResource($this->path, $id, $data);
	}

}
