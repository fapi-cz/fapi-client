<?php declare(strict_types = 1);

namespace Fapi\FapiClient\DI;

use Fapi\FapiClient\FapiClientFactory;
use Fapi\FapiClient\IFapiClient;
use Fapi\FapiClient\IFapiClientFactory;
use Fapi\HttpClient\CurlHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Fapi\HttpClient\IHttpClient;
use Nette\DI\CompilerExtension;
use Nette\Utils\Validators;

final class FapiClientExtension extends CompilerExtension
{

	/** @var array<mixed> */
	public array $defaults = [
		'username' => '',
		'password' => '',
		'apiUrl' => 'https://api.fapi.cz/',
		'httpClient' => null,
	];

	public function loadConfiguration(): void
	{
		$container = $this->getContainerBuilder();
		$config = $this->validateConfig($this->defaults);

		Validators::assertField($config, 'username', 'string');
		Validators::assertField($config, 'password', 'string');
		Validators::assertField($config, 'apiUrl', 'string');

		if ($config['httpClient'] === 'curl') {
			$container->addDefinition($this->prefix('httpClient'))
				->setType(IHttpClient::class)
				->setFactory(CurlHttpClient::class);
		} elseif ($config['httpClient'] === 'guzzle') {
			$container->addDefinition($this->prefix('httpClient'))
				->setType(IHttpClient::class)
				->setFactory(GuzzleHttpClient::class);
		}

		$container->addDefinition($this->prefix('fapiClientFactory'))
			->setType(IFapiClientFactory::class)
			->setFactory(FapiClientFactory::class, [
				'apiUrl' => $config['apiUrl'],
			]);

		if ($config['username'] === '' || $config['username'] === null) {
			return;
		}

		$container->addDefinition($this->prefix('fapiClient'))
			->setType(IFapiClient::class)
			->setFactory('@' . $this->prefix('fapiClientFactory') . '::createFapiClient', [
				'username' => $config['username'],
				'password' => $config['password'],
			]);
	}

}
