<?php
declare(strict_types = 1);

namespace Fapi\FapiClient;

use Fapi\HttpClient\CurlHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Fapi\HttpClient\IHttpClient;

class FapiClientFactory implements IFapiClientFactory
{

	/** @var string */
	private $apiUrl;

	/** @var IHttpClient */
	private $httpClient;

	public function __construct(string $apiUrl = 'https://api.fapi.cz', IHttpClient $httpClient = null)
	{
		$this->apiUrl = \rtrim($apiUrl, '/');

		if ($httpClient === null) {
			if (\class_exists('\GuzzleHttp\Client')) {
				$this->httpClient = new GuzzleHttpClient();
			} else {
				$this->httpClient = new CurlHttpClient();
			}
		} else {
			$this->httpClient = $httpClient;
		}
	}

	public function createFapiClient(string $username, string $password): IFapiClient
	{
		return new FapiClient($username, $password, $this->apiUrl, $this->httpClient);
	}

}
