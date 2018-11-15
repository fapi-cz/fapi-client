<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints\Traits;

trait Delete
{

	/** @var \Fapi\FapiClient\Rest\FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function delete(int $id)
	{
		$this->client->deleteResource($this->path, $id);
	}

}
