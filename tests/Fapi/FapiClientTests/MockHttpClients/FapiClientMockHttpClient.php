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
				'https://api.fapi.cz/',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 20:38:52 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=ot+2SA+As6CrBqt75y/rKP4NOUQb9V9dHbLELhylrY6S1WVNVhZtdBql1IZ10THgsoFvB9Y+CViiY7yDPW5IvfiC5jeWd9wPHI54sLa0//P1lV45e01AszL5ZnZ1; Expires=Thu, 22 Nov 2018 20:38:52 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'xxx'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Thu, 15 Nov 2018 20:38:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=D8KWgS40RThp+E/Wea83x4p/j6NZTjCEetywYGQIiYVQ1T39KFPD9UIPYicrMFQKeB/Z3XXYlq0Uq42AQFkBl9vgUfSltBF5J4xDrrC6QvUWB2yrqQCs9DflP5rG; Expires=Thu, 22 Nov 2018 20:38:52 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Invalid password.","type":"AuthenticationException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/',
				'GET',
				[
					'auth' => ['-@-.cz', 'xxx'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Thu, 15 Nov 2018 20:38:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=0l0mmHzW40lhgs+oJOByPnpTJkhzamA1WplKh6NC/rXz5QsQ3QA8cVSZXi04V9HlXnm8s8vOqeTfm/zFcJ9zVvawU0wpWtbHJRHuz2dWlC9uroxbyx5NIOafNdOi; Expires=Thu, 22 Nov 2018 20:38:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Invalid username.","type":"AuthenticationException"}'
			)
		);
	}

}
