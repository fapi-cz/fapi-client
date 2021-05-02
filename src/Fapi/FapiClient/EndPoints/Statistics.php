<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class Statistics
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/statistics';
	}

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>
	 */
	public function getTotalStatistics(array $parameters): array
	{
		return $this->client->getSingularResource($this->path . '/total', $parameters);
	}

}
