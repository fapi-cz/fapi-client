<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\DI;

use Fapi\FapiClient\FapiClient;
use Fapi\FapiClient\FapiClientFactory;
use Fapi\FapiClient\IFapiClient;
use Fapi\FapiClient\IFapiClientFactory;
use Nette\DI\CompilerExtension;
use Nette\Utils\Validators;

final class FapiClientExtension extends CompilerExtension
{

	/** @var mixed[] */
	public $defaults = [
		'username' => '',
		'password' => '',
		'apiUrl' => 'https://api.fapi.cz/',
	];

	public function loadConfiguration()
	{
		$container = $this->getContainerBuilder();
		$config = $this->validateConfig($this->defaults);

		Validators::assertField($config, 'username', 'string');
		Validators::assertField($config, 'password', 'string');
		Validators::assertField($config, 'apiUrl', 'string');

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
			->setFactory(FapiClient::class, [
				'username' => $config['username'],
				'password' => $config['password'],
				'apiUrl' => $config['apiUrl'],
			]);
	}

}
