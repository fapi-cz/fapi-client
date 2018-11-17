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
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Sat, 17 Nov 2018 10:11:28 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=2YX+Xph4FlRTWPhRAVa8tT9yZqtfOpnq11tNoayafy3mGCwgkTc6An8e1D1z54Zrx8iMkZm1vqC7j2VLra9qr8fymwMbfyGPrLBmAQlJN0E8tSP5NldEh817gbTY; Expires=Sat, 24 Nov 2018 10:11:28 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":2645,"name":"test","code":"unique","type":"percent","validity_type":"always","percent_discount":5}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/discount-codes/2645',
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
					'Date' => ['Sat, 17 Nov 2018 10:11:28 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=6kg8TDcIycHJ1hHEXQ9tAhWAz0+Dz8arff0qmK0YBsylQSL+K41Gyja1JZsr3H5AItuqhh/CW6L5GmpudayFrZauobzJNoxDpJZ63Qz13R3SFJSfVB6XhefBRgGV; Expires=Sat, 24 Nov 2018 10:11:28 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":2645,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/discount-codes/2645',
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
					'Date' => ['Sat, 17 Nov 2018 10:11:28 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=tgo0A1BdaWYC1gtdZqIjKxsOk+dqNJGLRfLdzO8/R2R1xuYkSDnEEUmZ0VY1It7pY7vNxPwuimo83tVGmqJTVl4FQzhfG5wkkSFhxBJb0f+OaYOy/SI4WIGxp+O/; Expires=Sat, 24 Nov 2018 10:11:28 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":2645,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null,"used_count":0}'
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
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Sat, 17 Nov 2018 10:11:28 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=ndqyNPdrEx3ZswrIIIUDqKJKMH0OMV5CRHRw+yd9sPSaAvXgKkocFyBSfv7zxdNiDFtTzZ42Xb/mMTquCd2fowEisD7NM8WuRnuV9cHfjmt4KGBy8JEr+TioVTHx; Expires=Sat, 24 Nov 2018 10:11:28 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"discount_codes":[{"id":2645,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null,"used_count":0}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/discount-codes/2645',
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
					'Date' => ['Sat, 17 Nov 2018 10:11:28 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=cpu7kpe3tQIqRN4cpMyv6YrSJoVGwdKAO9v+hbMPjBPKF0D+HSDKp1apdbW0I8H36NgoFWLwMjnz8ZuGyG+bID8xy5SsardKNuk0XfsgBMj3OCdP8aHEVBMrE82K; Expires=Sat, 24 Nov 2018 10:11:28 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"status":"success"}'
			)
		);
	}

}
