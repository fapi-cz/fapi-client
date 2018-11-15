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
					'Date' => ['Thu, 15 Nov 2018 16:50:34 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=sUh3H3EslO0qhbe2oq48RSJc677Pl2b7LLES2oII0wtTmZzZl64Frbx1Kk5nQOEvSg5p9WGzvCUnCxOeeOLNIuJ3xmailD40xhTPKCEYqUX3VO+Yjle1vba7T4sK; Expires=Thu, 22 Nov 2018 16:50:34 GMT; Path=/',
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
					'Date' => ['Thu, 15 Nov 2018 16:50:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=0GM4hnHxFwX2hohRHMKUX5wPoErMcqnrwkqDE7F0gn/YFmZfEoMxNuvVHqIteDvCA2DBSeL0tWKQxZ8LSXzErIch+HlfwE6/yYRZJMY7a2bf2Bd4DpsycsX0ZQRQ; Expires=Thu, 22 Nov 2018 16:50:34 GMT; Path=/',
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
					'Date' => ['Thu, 15 Nov 2018 16:50:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=kcz26fPqWRHoRbM7/qkLJDrWriZTjqOuidqZjQe6bkhwhLX/vMypJj0DqkMPWjzC9rU4US6NbplxyRW8tJ5SCj68q/7omF3JTuEsVOAeXs0uxW2HDyLG7hpYCBhm; Expires=Thu, 22 Nov 2018 16:50:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Invalid username.","type":"AuthenticationException"}'
			)
		);
	}

}
