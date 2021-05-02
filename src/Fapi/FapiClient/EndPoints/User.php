<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class User
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/user';
	}

	/**
	 * @return array<mixed>
	 */
	public function getCurrentUser(): array
	{
		return $this->client->getSingularResource($this->path);
	}

}
