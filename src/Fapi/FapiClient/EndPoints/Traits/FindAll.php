<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

trait FindAll
{

	/** @var \Fapi\FapiClient\Rest\FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	/** @var string */
	private $resources;

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]
	 */
	public function findAll(array $parameters = []): array
	{
		return $this->client->getResources($this->path, $this->resources, $parameters);
	}

}
