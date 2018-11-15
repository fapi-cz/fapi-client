<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

trait Create
{

	/** @var \Fapi\FapiClient\Rest\FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function create(array $data): array
	{
		return $this->client->createResource($this->path, $data);
	}

}
