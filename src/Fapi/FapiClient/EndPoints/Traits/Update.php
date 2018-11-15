<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

trait Update
{

	/** @var \Fapi\FapiClient\Rest\FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function update(int $id, array $data): array
	{
		return $this->client->updateResource($this->path, $id, $data);
	}

}
