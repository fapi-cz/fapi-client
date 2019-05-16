<?php
declare(strict_types = 1);

namespace Fapi\ToolsTest;

use Fapi\FapiClient\Tools\CountryCurrencyResolver;
use Tester\Assert;
use Tester\TestCase;

require_once __DIR__ . '/../../bootstrap.php';

final class CountryCurrencyResolverTest extends TestCase
{

	public function testGetCurrencyCode()
	{
		$countryCurrencyResolver = new CountryCurrencyResolver(['*' => 'EUR', 'CZ' => 'CZK', 'PL' => 'PLN']);

		Assert::equal('EUR', $countryCurrencyResolver->getCurrencyCode('US'));
		Assert::equal('EUR', $countryCurrencyResolver->getCurrencyCode('SK'));
		Assert::equal('CZK', $countryCurrencyResolver->getCurrencyCode('CZ'));
		Assert::equal('PLN', $countryCurrencyResolver->getCurrencyCode('PL'));
	}

}

(new CountryCurrencyResolverTest())->run();
