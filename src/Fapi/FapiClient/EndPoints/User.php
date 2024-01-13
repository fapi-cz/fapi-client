<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class User
{

	private string $path;

	public function __construct(private FapiRestClient $client)
	{
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
