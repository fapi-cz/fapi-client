<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientDiscountCodesMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'POST',
				'https://api.fapi.cz/discount-codes',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FqLTIwMTktMTEtMjZAZ21haWwuY29tOm5XSHlwSlMwWEpaQjZlM2RXbFBPVUxtUTQ=',
					],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Thu, 26 Mar 2020 07:16:39 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['197'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx/1.16.1'],
					'X-Powered-By' => ['Nette Framework'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0NAFFIWCAQCA1UVUR9RAFJcAxtQX1QUEQhcUVUHVA4DVQMCUAMEUAYSTl4DVEtRbw==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud', 'web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"id":7148,"user_id":11812,"name":"test","code":"unique","type":"percent","validity_type":"always","begin_date":null,"end_date":null,"percent_discount":5,"maximum_use":null,"discount_amounts":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/discount-codes/7148',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FqLTIwMTktMTEtMjZAZ21haWwuY29tOm5XSHlwSlMwWEpaQjZlM2RXbFBPVUxtUTQ=',
					],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 26 Mar 2020 07:16:39 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['214'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx/1.16.1'],
					'X-Powered-By' => ['Nette Framework'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0M+FxlRXA5pAkgAPGpRHls5HEpDSlMWAwBUUVIbARlWVwQOAE5UUlYcQApXAAAGAARXC1kEWFFWBQ4VTQACVEBVOQ==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud', 'web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"id":7148,"user_id":11812,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","begin_date":"2017-01-01","end_date":null,"percent_discount":10,"maximum_use":null,"discount_amounts":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/discount-codes/7148',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FqLTIwMTktMTEtMjZAZ21haWwuY29tOm5XSHlwSlMwWEpaQjZlM2RXbFBPVUxtUTQ=',
					],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 26 Mar 2020 07:16:39 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['214'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx/1.16.1'],
					'X-Powered-By' => ['Nette Framework'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0M+FxlRXA5pAkgAPGpRHls5HEpDSlMWAwBUUVIbARlWVgYABk5UUlYcQFxSXQECBwVSC1kHWQMAUwAVTQACVEBVOQ==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud', 'web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"id":7148,"user_id":11812,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","begin_date":"2017-01-01","end_date":null,"percent_discount":10,"maximum_use":null,"discount_amounts":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/discount-codes/is-valid?code=newUniqCode&form=form-path',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FqLTIwMTktMTEtMjZAZ21haWwuY29tOm5XSHlwSlMwWEpaQjZlM2RXbFBPVUxtUTQ=',
					],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 26 Mar 2020 07:16:39 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['20'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx/1.16.1'],
					'X-Powered-By' => ['Nette Framework'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0M+FwtLFUJTXwxdQx1RHVJUBgdRSlMWAwJSVVMbAwdKRgUGAVFXW1MAB1tRWgANAVBHFQdQDUAHOQ==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud', 'web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"applicable":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/discount-codes',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FqLTIwMTktMTEtMjZAZ21haWwuY29tOm5XSHlwSlMwWEpaQjZlM2RXbFBPVUxtUTQ=',
					],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 26 Mar 2020 07:16:39 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['235'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx/1.16.1'],
					'X-Powered-By' => ['Nette Framework'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0NAFFIWCAQCA1UVUR9RAVFTAxtTVVYUEQEGV1YCVA4FXVJUAVQFAVYSTl4DVEtRbw==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud', 'web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"discount_codes":[{"id":7148,"user_id":11812,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","begin_date":"2017-01-01","end_date":null,"percent_discount":10,"maximum_use":null,"discount_amounts":null}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/discount-codes/7148',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FqLTIwMTktMTEtMjZAZ21haWwuY29tOm5XSHlwSlMwWEpaQjZlM2RXbFBPVUxtUTQ=',
					],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 26 Mar 2020 07:16:39 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['20'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx/1.16.1'],
					'X-Powered-By' => ['Nette Framework'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0M+FxlRXA5pAkgAPGpRHls5HEpDSlMWAwBUUVIbARlWVwIGBE5UU04SVFsHXAsCUQFVClIDUApQBRQbBwcPS1Zt',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud', 'web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"status":"success"}'
			)
		);
	}

}
