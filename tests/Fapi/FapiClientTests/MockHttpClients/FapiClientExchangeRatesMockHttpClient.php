<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientExchangeRatesMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/exchange-rates/list',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				400,
				[
					'Date' => ['Wed, 15 May 2019 09:05:21 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=5kEtq7K98rxVVPL9mORGN29mLjzY8PZcJ9OrmqyXuARulC1Z6q55GPRk8KGM2H/XNSo/u2E8hlc5c/WPow0tOsxbSysTmP4PpUPTkDWd+jbBb/bfR5YxeKaOCKM/; Expires=Wed, 22 May 2019 09:05:20 GMT; Path=/',
					],
					'Server' => ['nginx/1.16.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Parameter source is not valid.","type":"ValidationException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/exchange-rates/list?source=EUR',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				400,
				[
					'Date' => ['Wed, 15 May 2019 09:05:21 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Bh6MhdP8tBnr8TPPZxTrc8UacSGUI9LImugTc/iWwOn3lDpJgQ11gCsEo3abY55qyz97BC4fqQhbXF4Ya2BldONTeYLwy9qwKpTio6fGxjr/6jXlGhVGxxsqmDk0; Expires=Wed, 22 May 2019 09:05:21 GMT; Path=/',
					],
					'Server' => ['nginx/1.16.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Parameter target is not valid.","type":"ValidationException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/exchange-rates/list?source=EUR&target=CZK',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				400,
				[
					'Date' => ['Wed, 15 May 2019 09:05:21 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=VjHeEysVeVPSfxphLKHFcF3z5qQdR8vgdbKUP3QZcIHeuIx1JLFrU3VIkQvzu+MI1g6Fpa1oy6Gz9rHOlhqvwdP3nzT1YcfLnM4sqDHqFhd9PGs/xTFUzWjJcTP1; Expires=Wed, 22 May 2019 09:05:21 GMT; Path=/',
					],
					'Server' => ['nginx/1.16.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Parameter date_from and date_to can not be null together with parameter date.","type":"ValidationException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/exchange-rates/list?source=EUR&target=CZK&date=2019-01-01',
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
					'Date' => ['Wed, 15 May 2019 09:05:21 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=9pYonkk4mWPavP3KMt8hIrqN9V8NnlsoR+FUM3JplZNLgViZrqz7c27TMgLiOuebsjNj74bDOSMwzd8o0Xn3YA3/hXmge3BJ9NwrWF1TU97p1zIbKPoLNeVvtD28; Expires=Wed, 22 May 2019 09:05:21 GMT; Path=/',
					],
					'Server' => ['nginx/1.16.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Frame-Options' => ['sameorigin'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Origin-Instance' => ['prd-fapi-web2.fapi.cz'],
					'X-Content-Type-Options' => ['nosniff'],
				],
				'{"exchange_rates":[{"date":"2019-01-01","source_currency":"EUR","target_currency":"CZK","exchange_rate":25.725000000000001}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/exchange-rates/list?source=EUR&target=CZK&date=2019-01-01&single=1',
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
					'Date' => ['Wed, 15 May 2019 09:05:21 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=UTsdCPbbKkQJO2DbKRjG6al0SKLUiNARtCGr0GM/iT2BgXMQakyxEdKeM4KZculxMlSOoadvOwXfsjNWE77DC2/slX0C/0dbT5HICEpHgpvrSkTPJTa328SGC0Zq; Expires=Wed, 22 May 2019 09:05:21 GMT; Path=/',
					],
					'Server' => ['nginx/1.16.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Frame-Options' => ['sameorigin'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Origin-Instance' => ['prd-fapi-web5.fapi.cz'],
					'X-Content-Type-Options' => ['nosniff'],
				],
				'{"date":"2019-01-01","source_currency":"EUR","target_currency":"CZK","exchange_rate":25.725000000000001}'
			)
		);
	}

}
