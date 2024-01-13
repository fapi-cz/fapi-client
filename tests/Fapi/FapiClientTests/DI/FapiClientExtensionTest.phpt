<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests\DI;

use Fapi\FapiClient\IFapiClient;
use Fapi\FapiClient\IFapiClientFactory;
use Fapi\HttpClient\Bridges\Tracy\BarHttpClient;
use Fapi\HttpClient\CurlHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Fapi\HttpClient\IHttpClient;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Nette\DI\Extensions\ExtensionsExtension;
use Nette\DI\MissingServiceException;
use Nette\Utils\FileSystem;
use Nette\Utils\Random;
use Tester\Assert;
use Tester\TestCase;

require_once __DIR__ . '/../../../bootstrap.php';

final class FapiClientExtensionTest extends TestCase
{

	private string $tempDir;

	protected function setUp(): void
	{
		parent::setUp();
		$this->tempDir = __DIR__ . '/tmp/' . Random::generate(1);
	}

	public function testConfigSimple(): void
	{
		$c = $this->createContainer('simple');

		$fapiClientFactory = $c->getByType(IFapiClientFactory::class);
		Assert::type(IFapiClientFactory::class, $fapiClientFactory);

		Assert::exception(static function () use ($c): void {
			$c->getByType(IFapiClient::class);
		}, MissingServiceException::class);
	}

	public function testConfigWithCurlService(): void
	{
		$c = $this->createContainer('withCurlService');

		$fapiClientFactory = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClientFactory);

		$fapiClient = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClient);

		$fapiClient = $c->getByType(IHttpClient::class);
		Assert::type(CurlHttpClient::class, $fapiClient);
	}

	public function testConfigCurlExtensionSetting(): void
	{
		$c = $this->createContainer('curlExtensionSetting');

		$fapiClientFactory = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClientFactory);

		$fapiClient = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClient);

		$fapiClient = $c->getByType(IHttpClient::class);
		Assert::type(CurlHttpClient::class, $fapiClient);
	}

	public function testConfigWithGuzzleService(): void
	{
		$c = $this->createContainer('withGuzzleService');

		$fapiClientFactory = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClientFactory);

		$fapiClient = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClient);

		$fapiClient = $c->getByType(IHttpClient::class);
		Assert::type(GuzzleHttpClient::class, $fapiClient);
	}

	public function testConfigGuzzleExtensionSetting(): void
	{
		$c = $this->createContainer('guzzleExtensionSetting');

		$fapiClientFactory = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClientFactory);

		$fapiClient = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClient);

		$fapiClient = $c->getByType(IHttpClient::class);
		Assert::type(GuzzleHttpClient::class, $fapiClient);
	}

	public function testConfigWithLoggingHttpClient(): void
	{
		$c = $this->createContainer('withLoggingHttpClient');

		$fapiClientFactory = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClientFactory);

		$fapiClient = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClient);

		$fapiClient = $c->getByType(IHttpClient::class);
		Assert::type(BarHttpClient::class, $fapiClient);
	}

	public function testConfigWithHttpClientExtension(): void
	{
		$c = $this->createContainer('withHttpClientExtension');

		$fapiClientFactory = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClientFactory);

		$fapiClient = $c->getByType(IFapiClient::class);
		Assert::type(IFapiClient::class, $fapiClient);

		$fapiClient = $c->getByType(IHttpClient::class);
		Assert::type(BarHttpClient::class, $fapiClient);
	}

	protected function createContainer(string $config): Container
	{
		$loader = new ContainerLoader($this->tempDir);
		$key = __FILE__ . ':' . __LINE__ . ':' . $config;
		$className = $loader->load(
			static function (Compiler $compiler) use ($config): void {
				$compiler->addExtension('extensions', new ExtensionsExtension());
				$compiler->addConfig([
					'parameters' => [],
				]);
				$compiler->loadConfig(__DIR__ . "/configs/$config.neon");
			},
			$key,
		);

		return new $className([]);
	}

	protected function tearDown(): void
	{
		FileSystem::delete($this->tempDir);
		parent::tearDown();
	}

}

(new FapiClientExtensionTest())->run();
