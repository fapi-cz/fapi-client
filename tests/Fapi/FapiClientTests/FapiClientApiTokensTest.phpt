<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\AuthorizationException;
use Fapi\FapiClient\FapiClient;
use Fapi\FapiClient\NotFoundException;
use Fapi\FapiClient\ValidationException;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;
use const LOCKS_DIR;

require __DIR__ . '/../../bootstrap.php';

class FapiClientApiTokensTest extends TestCase
{

	private CapturingHttpClient $httpClient;

	private FapiClient $fapiClient;

	protected function setUp(): void
	{
		Environment::lock('FapiClient', LOCKS_DIR);

		$this->httpClient = new CapturingHttpClient(
			new GuzzleHttpClient(),
			__DIR__ . '/MockHttpClients/FapiClientApiTokensMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientApiTokensMockHttpClient',
		);

		$this->fapiClient = new FapiClient(
			'slischka@test-fapi.cz',
			'jIBAWlKzzB6rQVk5Y3T0VxTgn',
			'https://api.fapi.cz/',
			$this->httpClient,
		);
	}

	protected function tearDown(): void
	{
		$this->httpClient->close();
	}

	public function testCreateGetUpdateAndDeleteApiTokens(): void
	{
		Assert::exception(function (): void {
			$this->fapiClient->getApiTokens()->create([]);
		}, ValidationException::class);

		$apiToken = $this->fapiClient->getApiTokens()->create([
			'purpose' => 'Sample Token',
		]);

		Assert::type('array', $apiToken);
		Assert::type('int', $apiToken['id']);
		Assert::same('Sample Token', $apiToken['purpose']);
		Assert::type('string', $apiToken['token']);

		$apiTokens = $this->fapiClient->getApiTokens()->findAll([
			'purpose' => 'Sample Token',
		]);

		Assert::type('array', $apiTokens);
		Assert::count(1, $apiTokens);
		Assert::same($apiToken, $apiTokens[0]);

		$apiTokens = $this->fapiClient->getApiTokens()->findAll([
			'purpose' => 'xxx',
		]);

		Assert::type('array', $apiTokens);
		Assert::count(0, $apiTokens);

		Assert::same($apiToken, $this->fapiClient->getApiTokens()->find($apiToken['id']));

		$updatedApiToken = $this->fapiClient->getApiTokens()->update($apiToken['id'], [
			'purpose' => 'Updated Token',
		]);

		Assert::type('array', $updatedApiToken);
		Assert::same($apiToken['id'], $updatedApiToken['id']);
		Assert::same('Updated Token', $updatedApiToken['purpose']);

		Assert::exception(function (): void {
			$this->fapiClient->getApiTokens()->update(-1, [
				'purpose' => 'Updated Token',
			]);
		}, NotFoundException::class);

		$this->fapiClient->getApiTokens()->delete($apiToken['id']);
		$this->fapiClient->getApiTokens()->delete(-1);

		Assert::null($this->fapiClient->getApiTokens()->find($apiToken['id']));

		$fapiClient = $this->fapiClient;
		Assert::exception(static function () use ($fapiClient): void {
			$fapiClient->getApiTokens()->find(1);
		}, AuthorizationException::class, 'You are not authorized for this action.');
	}

}

(new FapiClientApiTokensTest())->run();
