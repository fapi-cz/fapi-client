<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class ClientChanges
{

	private string $path;

	private string $resources;

	public function __construct(private FapiRestClient $client)
	{
		$this->path = '/client-changes';
		$this->resources = 'client_changes';
	}

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>
	 */
	public function findAll(int $clientId, array $parameters = []): array
	{
		return $this->client->getResources(
			$this->path . '/search',
			$this->resources,
			['client' => $clientId] + $parameters,
		);
	}

}
