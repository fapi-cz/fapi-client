<?php declare(strict_types = 1);

namespace Fapi\FapiClient\Rest;

use Fapi\FapiClient\AuthorizationException;
use Fapi\FapiClient\NotFoundException;
use Fapi\FapiClient\ValidationException;
use Fapi\HttpClient\HttpClientException;
use Fapi\HttpClient\HttpMethod;
use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpStatusCode;
use Fapi\HttpClient\IHttpClient;
use Fapi\HttpClient\RedirectHelper;
use Fapi\HttpClient\Utils\Json;
use Psr\Http\Message\ResponseInterface;
use Throwable;
use function http_build_query;
use function is_array;
use function is_string;
use function rtrim;

class FapiRestClient
{

	/** @var string */
	private $username;

	/** @var string */
	private $password;

	/** @var string */
	private $apiUrl;

	/** @var IHttpClient */
	private $httpClient;

	public function __construct(string $username, string $password, string $apiUrl, IHttpClient $httpClient)
	{
		$this->username = $username;
		$this->password = $password;
		$this->apiUrl = rtrim($apiUrl, '/');
		$this->httpClient = $httpClient;
	}

	public function getCurrentUsername(): string
	{
		return $this->username;
	}

	public function checkConnection(): void
	{
		$this->getSingularResource('/');
	}

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>
	 */
	public function getResources(string $path, string $resourcesKey, array $parameters = [], int $options = 0): array
	{
		if ($parameters !== []) {
			$path .= '?' . $this->formatUrlParameters($parameters);
		}

		$httpResponse = $this->sendHttpRequest(HttpMethod::GET, $path);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S200_OK) {
			return $this->getResourcesResponseData($httpResponse, $resourcesKey, $options);
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @param string|int $id
	 * @param array<mixed> $parameters
	 * @return array<mixed>|null
	 */
	public function getResource(string $path, $id, array $parameters = [], int $options = 0): ?array
	{
		$path .= '/' . $id;

		if ($parameters !== []) {
			$path .= '?' . $this->formatUrlParameters($parameters);
		}

		$httpResponse = $this->sendHttpRequest(HttpMethod::GET, $path);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S200_OK) {
			return $this->getResourceResponseData($httpResponse, $options);
		}

		if ($httpResponse->getStatusCode() === HttpStatusCode::S404_NOT_FOUND) {
			return null;
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @param array<mixed> $parameters
	 * @return array<mixed>
	 */
	public function getSingularResource(string $path, array $parameters = [], int $options = 0): array
	{
		if ($parameters !== []) {
			$path .= '?' . $this->formatUrlParameters($parameters);
		}

		$httpResponse = $this->sendHttpRequest(HttpMethod::GET, $path);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S200_OK) {
			return $this->getResourceResponseData($httpResponse, $options);
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @param array<mixed> $data
	 * @return array<mixed>
	 */
	public function createResource(string $path, array $data, int $options = 0): array
	{
		$httpResponse = $this->sendHttpRequest(HttpMethod::POST, $path, $data);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S201_CREATED) {
			return $this->getResourceResponseData($httpResponse, $options);
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @param int|string $id
	 * @param array<mixed> $data
	 * @return array<mixed>
	 */
	public function updateResource(string $path, $id, array $data, int $options = 0): array
	{
		$httpResponse = $this->sendHttpRequest(HttpMethod::PUT, $path . '/' . $id, $data);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S200_OK) {
			return $this->getResourceResponseData($httpResponse, $options);
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @param int|string $id
	 */
	public function deleteResource(string $path, $id): void
	{
		$httpResponse = $this->sendHttpRequest(HttpMethod::DELETE, $path . '/' . $id);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S200_OK) {
			return;
		}

		if ($httpResponse->getStatusCode() === HttpStatusCode::S404_NOT_FOUND) {
			return;
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @param array<mixed> $parameters
	 */
	public function sendEmailWithInvoice(array $parameters): void
	{
		$httpResponse = $this->sendHttpRequest(HttpMethod::POST, '/invoices/send-email', $parameters);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S200_OK) {
			return;
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @return array<mixed>
	 */
	public function generateQrCode(int $id): array
	{
		$url = '/invoices/generate-qr-code/' . $id;
		$httpResponse = $this->sendHttpRequest(HttpMethod::GET, $url);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S200_OK) {
			return $this->getResponseData($httpResponse);
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @param array<mixed> $parameters
	 */
	public function getInvoicePdf(int $id, array $parameters = []): ?string
	{
		$path = '/invoices/' . $id . '.pdf';

		if ($parameters !== []) {
			$path .= '?' . $this->formatUrlParameters($parameters);
		}

		$httpResponse = $this->sendHttpRequest(HttpMethod::GET, $path);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S200_OK) {
			return (string) $httpResponse->getBody();
		}

		if ($httpResponse->getStatusCode() === HttpStatusCode::S404_NOT_FOUND) {
			return null;
		}

		$this->processErrorStatusCodeIfNeeded($httpResponse);

		throw new InvalidStatusCodeException('Api return invalid status code: ' . $httpResponse->getStatusCode());
	}

	/**
	 * @param array<mixed>|null $data
	 * @param array<mixed> $headers
	 */
	private function sendHttpRequest(
		string $method,
		string $path,
		?array $data = null,
		array $headers = []
	): ResponseInterface
	{
		$url = $this->apiUrl . $path;

		if (!isset($headers['Content-Type'])) {
			$headers['Content-Type'] = 'application/json';
		}

		if (!isset($headers['Accept'])) {
			$headers['Accept'] = 'application/json';
		}

		$options = [
			'auth' => [$this->username, $this->password],
			'headers' => $headers,
		];

		if ($data !== null) {
			$options['json'] = $data;
		}

		try {
			$httpRequest = HttpRequest::from($url, $method, $options);
			$httpResponse = $this->httpClient->sendRequest($httpRequest);

			return RedirectHelper::followRedirects($this->httpClient, $httpResponse, $httpRequest, 3);
		} catch (HttpClientException $e) {
			throw new RestClientException('Failed to send an HTTP request.', 0, $e);
		}
	}

	/**
	 * @param array<mixed> $parameters
	 */
	private function formatUrlParameters(array $parameters): string
	{
		return http_build_query($parameters, '', '&');
	}

	/**
	 * @return array<mixed>
	 */
	private function getResourcesResponseData(
		ResponseInterface $httpResponse,
		string $resourcesKey,
		int $options
	): array
	{
		$responseData = $this->getResponseData($httpResponse);

		if (!is_array($responseData)) {
			throw new InvalidResponseBodyException('Response data is not an array.');
		}

		if (!isset($responseData[$resourcesKey])) {
			throw new InvalidResponseBodyException('Response data does not contain attribute with resources.');
		}

		$resources = $responseData[$resourcesKey];

		if (!is_array($resources)) {
			throw new InvalidResponseBodyException('Resources must be an array.');
		}

		foreach ($resources as $resource) {
			$this->validateResource($resource, $options);
		}

		return $resources;
	}

	/**
	 * @return array<mixed>
	 */
	private function getResourceResponseData(ResponseInterface $httpResponse, int $options): array
	{
		$resource = $this->getResponseData($httpResponse);

		$this->validateResource($resource, $options);

		return $resource;
	}

	/**
	 * @param array<mixed>|string $resource
	 */
	private function validateResource($resource, int $options): void
	{
		if ((bool) ($options & FapiRestClientOptions::STRING_RESOURCE)) {
			if (!is_string($resource)) {
				throw new InvalidResponseBodyException('Resource must be a string.');
			}

			return;
		}

		if (!is_array($resource)) {
			throw new InvalidResponseBodyException('Resource must be an array.');
		}
	}

	private function getErrorMessage(ResponseInterface $httpResponse): string
	{
		$responseData = $this->getResponseData($httpResponse);

		return $responseData['message'] ?? '';
	}

	/**
	 * @return mixed
	 */
	private function getResponseData(ResponseInterface $httpResponse)
	{
		try {
			return Json::decode((string) $httpResponse->getBody(), Json::FORCE_ARRAY);
		} catch (Throwable $e) {
			throw new InvalidResponseBodyException('Response body is not a valid JSON.', 0, $e);
		}
	}

	private function processErrorStatusCodeIfNeeded(ResponseInterface $httpResponse): void
	{
		$message = $this->getErrorMessage($httpResponse);

		if ($httpResponse->getStatusCode() === HttpStatusCode::S400_BAD_REQUEST) {
			throw new ValidationException($message);
		}

		if ($httpResponse->getStatusCode() === HttpStatusCode::S401_UNAUTHORIZED) {
			throw new AuthorizationException($message);
		}

		if ($httpResponse->getStatusCode() === HttpStatusCode::S404_NOT_FOUND) {
			throw new NotFoundException($message);
		}
	}

}
