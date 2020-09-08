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
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:56:10 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['2'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
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
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6Onh4eA=='],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Tue, 08 Sep 2020 13:56:10 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['64'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
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
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic LUAtLmN6Onh4eA=='],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Tue, 08 Sep 2020 13:56:10 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['64'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"message":"Invalid password.","type":"AuthenticationException"}'
			)
		);
	}

}
