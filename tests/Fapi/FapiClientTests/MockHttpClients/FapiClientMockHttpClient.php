<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/',
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
					'Date' => ['Sat, 17 Nov 2018 09:55:55 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=CwiSgExR0D/EEt8o5NLyFb5F5CanSedCfJOmtd/ZuO/1sDyADGl/WpJCfn8cGSeXwhnwg6KrjGd+s14T6wK3TQxiBPcPgIsAnuTtWC9GgV5ySBVTY3OK5WY+ZV6l; Expires=Sat, 24 Nov 2018 09:55:55 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6eHh4'],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Sat, 17 Nov 2018 09:55:56 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=fIOCpFWuSclGuDjubrh/OlSut2nXAuaVeyJYNkqoKL1VVgfbY8sXSRkubJ9h1VEzdPcQ+LurQK5mHp5MMQgi1e8UPqXpRi4nEVO58mHDZW1x+NWkyvlY8CrpvTln; Expires=Sat, 24 Nov 2018 09:55:56 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Invalid password.","type":"AuthenticationException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic LUAtLmN6Onh4eA=='],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Sat, 17 Nov 2018 09:55:56 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=BLPGUh5agU9Ezp/LjBEVdYoUAXLR2Gxzt4nUrkwH2CPBk+3fSrugZaupRSBbP7Y+mjhHHrM4fU4Mjn6qOmfXnlNaRu6mvbluUbq4RfZXwoy4BcLLFDtcTmNE4OJW; Expires=Sat, 24 Nov 2018 09:55:56 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Invalid username.","type":"AuthenticationException"}'
			)
		);
	}

}
