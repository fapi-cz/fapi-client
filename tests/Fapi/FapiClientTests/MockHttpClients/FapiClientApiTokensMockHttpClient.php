<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientApiTokensMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens',
				'POST',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['purpose' => 'Sample Token'],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:08 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=08bGtEWK+hCGzjxppE/1XyYJY51YeCu7BITpgUyEmj5NWX2lmIZRYv5oAcxpqG+zmOBh53+15cJjr5XrSyGVFoDXUk6PWy82XQHWiMpUW6Jzt4PfS/Uui31MQbQR; Expires=Wed, 21 Nov 2018 10:20:08 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11913,"purpose":"Sample Token","token":"jgtr4ee3xhzjy6g430pv85inl4yibls827o6v6g3","user_id":10303}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens?purpose=Sample+Token',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:08 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=5Jx7Mj8iwfYaM+I7ulXP70+di0AVwZCSYzTSftEIkUKrqNYnRwQ2OdLOr7rndOlzavP5Q3pPHcX3mNyBbzDQKFN1pTDkmi0lCZyjeXIVPyouBpl7u2OZn6417KbB; Expires=Wed, 21 Nov 2018 10:20:08 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"api_tokens":[{"id":11913,"purpose":"Sample Token","token":"jgtr4ee3xhzjy6g430pv85inl4yibls827o6v6g3","user_id":10303}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens?purpose=xxx',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:08 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=OfYl2QaBPy4FYRBCUbN4lpWNq6PvWFO83cCTExSCA6Z4VI3LsKVKNx965N2zbYqglv8BXXBiPACPFCPuHyQj/wPYEqLTEfeeLaoYAiN4slK+nOYTdUNCJUtV9e/O; Expires=Wed, 21 Nov 2018 10:20:08 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"api_tokens":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/11913',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:08 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=7AlkwpAPIAjHcKgdcb+VcDQfvi1ZhQPTHC5O7ZhIsxtlUr6W5B4eFXt29t6F5g5I1x5j5TTEj8FVDk66WZwBVs5bb4jFj1gxp2PsklKUEKiaS8jTQTcsRp0E2klT; Expires=Wed, 21 Nov 2018 10:20:08 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11913,"purpose":"Sample Token","token":"jgtr4ee3xhzjy6g430pv85inl4yibls827o6v6g3","user_id":10303}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/11913',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['purpose' => 'Updated Token'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:08 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=qtTYjSTW5xqScynL/H6REMKyuoP6jokZCKMLVOEwZ5DyUSLawfkJjGDwoieKx0+S6jCDGPPp/K9f9X1jtofuT65glkYi7raTP9OiWAFqZ0HpK0+1+wb6yBbXfooE; Expires=Wed, 21 Nov 2018 10:20:08 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11913,"purpose":"Updated Token","token":"jgtr4ee3xhzjy6g430pv85inl4yibls827o6v6g3","user_id":10303}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/-1',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['purpose' => 'Updated Token'],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:08 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=QM58YSxadEa1L0QwakQ0i2IphAKC+f3roe8gyS+pa7t/pA0jEhe4wM9mQKvPNTb9IqhAleUmaNnrmlMhBp4p2zcxYo7Eh5rTlFSAy4vjFcFUp84R5MB6iUvYabHW; Expires=Wed, 21 Nov 2018 10:20:08 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/11913',
				'DELETE',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:09 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=BuJEiYm0gGU0ATEH5sAgVL0ySEt00a/hNJ4Bm8VB5XDFDxs/s5W5gYbxwIyu4E96Uj554J0Wxox6lr2zLVGmnvvHztTtUxdZ/wd5ihJe03OpxdlSW6r8MyArlqOF; Expires=Wed, 21 Nov 2018 10:20:08 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"status":"success"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/-1',
				'DELETE',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:09 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=WuMchxV05j5OpL3q499FkoiP5cuimKiX6flrxifqwGZZuvynKfJZwMFwFmvCP2WZat+2u9YXcWSSwsrSfP8NcFe6c91wNWiWdr8OIXAtqEBXBVSn/vUxA7YVnCGx; Expires=Wed, 21 Nov 2018 10:20:09 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/11913',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:09 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=o3IQyt4hrHBve+16gMsBLg2WGw5gzWr7EpwU8BCm+HqBOcDl1fNXKWlPiAc3L1YosYLiTRknlYsX1ZdFV+0Bnsj8VLcPPjiC2YDumPDj0/jkfYRSXoeQPgrFr1Bi; Expires=Wed, 21 Nov 2018 10:20:09 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/1',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Wed, 14 Nov 2018 10:20:09 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=byFsu5OBdfvTZRHz452Mfki6/440suSPKakH4qKBjM0yy3V30vkKqS1+nn7Fri8wo85kAFLTX6U7CCuuVMMUoyZ36EClrX5uC/PimU6dHAQtrfUZxI3MEezlaJvG; Expires=Wed, 21 Nov 2018 10:20:09 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
