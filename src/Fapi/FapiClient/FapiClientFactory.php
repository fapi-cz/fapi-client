<?php
declare(strict_types = 1);

namespace Fapi\FapiClient;

use Fapi\HttpClient\IHttpClient;

class FapiClientFactory implements IFapiClientFactory
{

	/** @var string */
	private $apiUrl;

	/** @var IHttpClient */
	private $httpClient;

	public function __construct(string $apiUrl, IHttpClient $httpClient)
	{
		$this->apiUrl = \rtrim($apiUrl, '/');
		$this->httpClient = $httpClient;
	}

	public function createFapiClient(string $username, string $password): IFapiClient
	{
		return new FapiClient($username, $password, $this->apiUrl, $this->httpClient);
	}

}
