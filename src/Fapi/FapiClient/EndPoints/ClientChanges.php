<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class ClientChanges
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	/** @var string */
	private $resources;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/client-changes';
		$this->resources = 'client_changes';
	}

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>|null
	 */
	public function findAll(int $clientId, array $parameters = []): ?array
	{
		return $this->client->getResources(
			$this->path . '/search',
			$this->resources,
			['client' => $clientId] + $parameters
		);
	}

}
