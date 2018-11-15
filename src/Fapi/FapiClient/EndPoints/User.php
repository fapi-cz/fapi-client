<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class User extends EndPoint
{

	public function __construct(FapiRestClient $client)
	{
		parent::__construct($client, '/user');
	}

	/**
	 * @return mixed[]
	 */
	public function getCurrentUser(): array
	{
		return $this->client->getSingularResource($this->path);
	}

}
