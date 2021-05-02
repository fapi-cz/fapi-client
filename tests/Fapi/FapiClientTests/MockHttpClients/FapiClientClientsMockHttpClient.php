<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientClientsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'POST',
				'https://api.fapi.cz/clients',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"email":"test-Fapi@fabik.org"}',
				'1.1'
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Tue, 08 Sep 2020 13:39:50 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['62'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"id":1808080,"email":"test-Fapi@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/clients?email=test-Fapi%40fabik.org&limit=1',
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
					'Date' => ['Tue, 08 Sep 2020 13:39:50 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['76'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"clients":[{"id":1808080,"email":"test-Fapi@fabik.org","tax_payer":false}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/clients/1808080',
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
					'Date' => ['Tue, 08 Sep 2020 13:39:50 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['62'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"id":1808080,"email":"test-Fapi@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/clients/1808080',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"email":"test-Fapi-2@fabik.org"}',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:39:50 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['64'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"id":1808080,"email":"test-Fapi-2@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/clients/1808080',
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
					'Date' => ['Tue, 08 Sep 2020 13:39:50 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['4'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'null'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/clients/1808080',
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
				404,
				[
					'Date' => ['Tue, 08 Sep 2020 13:39:50 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['74'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/clients/1',
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
				401,
				[
					'Date' => ['Tue, 08 Sep 2020 13:39:51 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['85'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
