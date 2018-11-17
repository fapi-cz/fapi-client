<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientItemsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'POST',
				'https://api.fapi.cz/items',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Sat, 17 Nov 2018 10:07:13 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Y6tqxqVugdeNJuq6isqR9D6f2VqZ8M7ZVaOGb+Pi0zYb5tNqRNCf+7RpeoKpC4F2USqF0Cr5aNRcy8FsJGRtIvbmp4I71+anB6CFJa5pCxtDgAyb95N/XI0SzC9P; Expires=Sat, 24 Nov 2018 10:07:13 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":6055632,"invoice":183480795,"name":"Sample Item Template","code":null,"accounting_code":null,"price":10,"count":1,"round_item":false,"correction_item":false,"type":null,"electronically_supplied_service":false,"moss":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/items/6055632',
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
					'Date' => ['Sat, 17 Nov 2018 10:07:13 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=ZrAVXfi87z8xNx8DZaKKGwli4OaCSb0KH0QhmMhKnPJXC6kluBvUD+bOV+K6p2+61jdNPWuOR1CG/PBrB3grhPQ/UyD94KVsCSMfauD/+O9WKE76yQp22gZIzJzJ; Expires=Sat, 24 Nov 2018 10:07:13 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":6055632,"invoice":183480795,"name":"Sample Item Template","code":null,"accounting_code":null,"price":10,"count":2,"round_item":false,"correction_item":false,"type":null,"electronically_supplied_service":false,"moss":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/items/6055632',
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
					'Date' => ['Sat, 17 Nov 2018 10:07:13 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=dxON0H+76yLlEPHv6jhURw/smgOTCeGKHZmIiix5fFi2aTl5gPyh4/7BEwVyr9Ix3aDJdbOmoqZfwH/Auj6DOb+E1IEr8ydqgNFm+aMMfh993QJdqgctJlXx612/; Expires=Sat, 24 Nov 2018 10:07:13 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'null'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/items/6055632',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Sat, 17 Nov 2018 10:07:14 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=4GPWJrOLixRRExnlTWbyPV1xduIM4Ja7prHr4gLWYWxxcZjvE+hPfOZjhps9wJyKatIccf+p3Fbs51jtl7zjE6ugrd/1wnCUruB/Yq4L/8ccK/SWokReKLmv2Jzy; Expires=Sat, 24 Nov 2018 10:07:14 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
	}

}
