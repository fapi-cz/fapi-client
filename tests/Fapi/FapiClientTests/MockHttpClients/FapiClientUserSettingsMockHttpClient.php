<?php
declare(strict_types = 1);

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
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Content-Type' => ['application/json;charset=utf-8'],
					'Content-Length' => ['73'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Thu, 16 May 2019 08:28:25 GMT'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"country_currency_setting":{"*":"EUR","CZ":"CZK","PL":"PLN","RU":"RUB"}}'
			)
		);
	}

}
