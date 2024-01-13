<?php declare(strict_types = 1);

namespace Fapi\FapiClient;

use Fapi\HttpClient\CurlHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Fapi\HttpClient\IHttpClient;
use function class_exists;
use function rtrim;

class FapiClientFactory implements IFapiClientFactory
{

	private string $apiUrl;

	private IHttpClient $httpClient;

	public function __construct(string $apiUrl = 'https://api.fapi.cz', IHttpClient|null $httpClient = null)
	{
		$this->apiUrl = rtrim($apiUrl, '/');

		if ($httpClient === null) {
			$this->httpClient = class_exists('\GuzzleHttp\Client') ? new GuzzleHttpClient() : new CurlHttpClient();
		} else {
			$this->httpClient = $httpClient;
		}
	}

	public function createFapiClient(string $username, string $password): IFapiClient
	{
		return new FapiClient($username, $password, $this->apiUrl, $this->httpClient);
	}

}
