<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

abstract class EndPoint
{

	/** @var FapiRestClient */
	protected $client;

	/** @var string */
	protected $path;

	public function __construct(FapiRestClient $client, string $path)
	{
		$this->client = $client;
		$this->path = $path;
	}

}
