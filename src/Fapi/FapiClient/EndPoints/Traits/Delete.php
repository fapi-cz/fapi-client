<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

use Fapi\FapiClient\Rest\FapiRestClient;

trait Delete
{

	private FapiRestClient $client;

	private string $path;

	public function delete(int $id): void
	{
		$this->client->deleteResource($this->path, $id);
	}

}
