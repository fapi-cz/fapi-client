<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class Statistics
{

	private string $path;

	public function __construct(private FapiRestClient $client)
	{
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
