<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

use Fapi\FapiClient\Rest\FapiRestClient;

trait FindAll
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	/** @var string */
	private $resources;

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>
	 */
	public function findAll(array $parameters = []): array
	{
		return $this->client->getResources($this->path, $this->resources, $parameters);
	}

}
