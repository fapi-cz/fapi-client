<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

use Fapi\FapiClient\Rest\FapiRestClient;

trait Create
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	/**
	 * @param array<mixed> $data
	 * @return array<mixed>
	 */
	public function create(array $data): array
	{
		return $this->client->createResource($this->path, $data);
	}

}
