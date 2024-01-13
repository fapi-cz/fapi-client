<?php declare(strict_types = 1);

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
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"name":"test","code":"unique","type":"percent","validity_type":"always","percent_discount":5}',
				'1.1',
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Tue, 08 Sep 2020 13:40:18 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['197'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'Set-Cookie' => ['nette-samesite=1; path=/; HttpOnly; SameSite=Strict'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0NAFFIWCAQCA1UVUR9RAVdWAxtQX1QUEQdRWFBSAgJTVgVSB1BQWwESTl4DVEtRbw==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud', 'web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"id":9761,"user_id":13057,"name":"test","code":"unique","type":"percent","validity_type":"always","begin_date":null,"end_date":null,"percent_discount":5,"maximum_use":null,"discount_amounts":null}',
			),
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/discount-codes/9761',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"name":"new name","code":"newUniqCode","percent_discount":10,"validity_type":"range","begin_date":"2017-01-01"}',
				'1.1',
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:40:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['214'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'Set-Cookie' => ['nette-samesite=1; path=/; HttpOnly; SameSite=Strict'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0M+FxlRXA5pAkgAPGpRHls5HEpDSlMWAwBUUVIbARlWVgkPAE5UUlYcQFtWWw0MUQoBCwRTAAEAVFcVTQACVEBVOQ==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud', 'web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"id":9761,"user_id":13057,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","begin_date":"2017-01-01","end_date":null,"percent_discount":10,"maximum_use":null,"discount_amounts":null}',
			),
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/discount-codes/9761',
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
					'Date' => ['Tue, 08 Sep 2020 13:40:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['214'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'Set-Cookie' => ['nette-samesite=1; path=/; HttpOnly; SameSite=Strict'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0M+FxlRXA5pAkgAPGpRHls5HEpDSlMWAwBUUVIbARlWVQkCAU5UUlYcQAtVWw0BCgIBCANUUAAHV1UVTQACVEBVOQ==',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud', 'web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"id":9761,"user_id":13057,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","begin_date":"2017-01-01","end_date":null,"percent_discount":10,"maximum_use":null,"discount_amounts":null}',
			),
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/discount-codes/is-valid?code=newUniqCode&form=form-path',
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
					'Date' => ['Tue, 08 Sep 2020 13:40:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['20'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'Set-Cookie' => ['nette-samesite=1; path=/; HttpOnly; SameSite=Strict'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0M+FwtLFUJTXwxdQx1RHVJUBgdRSlMWAwFTU1UbAwdKRgNUV1ZQUwNSBw1RDVkFCgJHFQdQDUAHOQ==',
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
				'{"applicable":false}',
			),
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/discount-codes',
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
					'Date' => ['Tue, 08 Sep 2020 13:40:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['235'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'Set-Cookie' => ['nette-samesite=1; path=/; HttpOnly; SameSite=Strict'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0NAFFIWCAQCA1UVUR9RAlVRDhtTVVYUEQlWAlMHBwBXAFRUBQZeAFASTl4DVEtRbw==',
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
				'{"discount_codes":[{"id":9761,"user_id":13057,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","begin_date":"2017-01-01","end_date":null,"percent_discount":10,"maximum_use":null,"discount_amounts":null}]}',
			),
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/discount-codes/9761',
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
					'Date' => ['Tue, 08 Sep 2020 13:40:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['20'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'Set-Cookie' => ['nette-samesite=1; path=/; HttpOnly; SameSite=Strict'],
					'X-NewRelic-App-Data' => [
						'PxQOV1BaCxACVldQAQEBREgTYVYAMhEDXhFZAUxRW1xvSngCRQhcDDgZVhEPPxdFAThOBl5CVAkRX0IeAQkHB0M+FxlRXA5pAkgAPGpRHls5HEpDSlMWAwBUUVIbARlWUQYPBU5UU04SAw1RAA8MAlYGCwIHAwQBBRQbBwcPS1Zt',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Frame-Options' => ['sameorigin', 'sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud', 'web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"status":"success"}',
			),
		);
	}

}
