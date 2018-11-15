<?php
declare(strict_types = 1);

namespace Fapi\ToolsTest;

use Fapi\FapiClient\Tools\SecurityChecker;
use Tester\Assert;
use Tester\TestCase;

require_once __DIR__ . '/../../bootstrap.php';

final class SecurityCheckerTest extends TestCase
{

	/**
	 * @dataProvider getIsValidData
	 * @param mixed[] $invoice
	 */
	public function testIsValid(array $invoice, int $time, string $expectedSecurity)
	{
		Assert::true(SecurityChecker::isValid($invoice, $time, $expectedSecurity));
	}

	/**
	 * @return mixed[]
	 */
	public function getIsValidData(): array
	{
		return [
			[
				'invoice' => [
					'id' => 183488476,
					'number' => 1801108909,
					'items' => [
						[
							'id' => '6044430',
							'name' => 'SmartEmailing - do 1.000 kontaktů',
						],
						[
							'id' => '6044431',
							'name' => 'Zaokrouhlení',
						],
					],
				],
				'time' => 1542298656,
				'expectedSecurity' => '35221e0d0168d282edc3768ed4b4e878dec3c921',
			],
		];
	}

}

(new SecurityCheckerTest())->run();
