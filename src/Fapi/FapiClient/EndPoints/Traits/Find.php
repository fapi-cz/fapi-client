<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

trait Find
{

	/** @var \Fapi\FapiClient\Rest\FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]|null
	 */
	public function find(int $id, array $parameters = [])
	{
		return $this->client->getResource($this->path, $id, $parameters);
	}

}
