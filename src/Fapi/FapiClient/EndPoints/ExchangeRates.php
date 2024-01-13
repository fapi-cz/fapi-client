<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class ExchangeRates
{

	private string $path;

	private string $resources;

	public function __construct(private FapiRestClient $client)
	{
		$this->path = '/exchange-rates';
		$this->resources = 'exchange_rates';
	}

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>
	 */
	public function list(array $parameters = []): array
	{
		if (isset($parameters['single']) && (bool) $parameters['single']) {
			return $this->client->getSingularResource($this->path . '/list', $parameters);
		}

		return $this->client->getResources($this->path . '/list', $this->resources, $parameters);
	}

}
