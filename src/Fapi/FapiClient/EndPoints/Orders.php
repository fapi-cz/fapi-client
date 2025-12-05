<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\EndPoints\Traits\Create;
use Fapi\FapiClient\EndPoints\Traits\Find;
use Fapi\FapiClient\EndPoints\Traits\FindAll;
use Fapi\FapiClient\EndPoints\Traits\Update;
use Fapi\FapiClient\Rest\FapiRestClient;

final class Orders
{

	use Find;
	use FindAll;
	use Create;
	use Update;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/orders';
		$this->resources = 'orders';
	}

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>
	 *
	 * @deprecated Use FindAll instead. This API endpoint will be removed in future versions.
	 */
	public function search(array $parameters = []): array
	{
		return $this->client->getSingularResource($this->path . '/search', $parameters);
	}

}
