<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientUserSettingsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/user-settings/country-currency-setting',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'',
				'1.1',
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:57:58 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['51'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'Set-Cookie' => ['nette-samesite=1; path=/; HttpOnly; SameSite=Strict'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOF0RURUsXVEJHCwgEEWxNWw1NVkBASkhaFEMTVgwHTxoSAxdMWl4DQ04HHwdWVAEGH1JIU1QJVAtODQkYEFYEWgQBVVBSXFMAUlJbD1YSSAcDW0JSOw==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud', 'web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"country_currency_setting":{"*":"EUR","CZ":"CZK"}}',
			),
		);
	}

}
