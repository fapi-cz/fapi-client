<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class Statistics extends EndPoint
{

	public function __construct(FapiRestClient $client)
	{
		parent::__construct($client, '/statistics');
	}

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]
	 */
	public function getTotalStatistics(array $parameters): array
	{
		return $this->client->getSingularResource($this->path . '/total', $parameters);
	}

}
