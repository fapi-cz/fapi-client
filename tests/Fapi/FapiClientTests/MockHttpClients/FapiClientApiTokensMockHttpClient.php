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
					'json' => [],
				]
			),
			new HttpResponse(
				400,
				[
					'Date' => ['Thu, 15 Nov 2018 20:19:52 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=X7ZsBbonFvf89yA+YkRfB0r1dsRkkQ9HlC7YOZxoM04N9PnSLjMVa+OZAmqs3OWJ5vLf+Oiy9Fm2H53DtQV4ctMLqWRtvHxhn7xLlVF1GJs2p+vXeOSsO0r9YU1v; Expires=Thu, 22 Nov 2018 20:19:52 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Parameter purpose is required.","type":"ValidationException"}'
			)
		);
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
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=vst90m8Zw599g0949Q9dwJy1jZZObZx31WoP1M5lJLmM4tv7FLNFqMSyEwKWGCGe/WPV0PZSJcSgrPy6B8a/iI7efyuIzT7Ftwiab867ho++fdBuGVupTKodZcRo; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11926,"purpose":"Sample Token","token":"7adps00t9rod73vew5mbjx7o1h5c5wh0br9nxnmf","user_id":10303}'
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
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=F1UAaxfLYdjokZw2douGEPBTtJ0BqWeCJ4RkShUBJuNLhayqhBbtTAWUdg4iL/kP6NFhujz13zn2UCqwNKIi+93LnT+nlew65qvHR0tfJsoFzy4nLXDdeiOG0byJ; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"api_tokens":[{"id":11926,"purpose":"Sample Token","token":"7adps00t9rod73vew5mbjx7o1h5c5wh0br9nxnmf","user_id":10303}]}'
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
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=slgfowKC0Y8k0OB/y5HdSY6RNwT5VjFY2SzOSm4j1UXaAHO/7HpgRj3Y4NKLsrinxMv82ESe72oBklcTt3Q22XUXte6QRh+1YB0Zg7ExGuhHaDDcUl2wdceoy2/W; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"api_tokens":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/11926',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=p+j/Uyd7svnv+BEAeupD2XwmqN5EzH51CK3zs09Gi6izou1OEJnmdbXFVbd1yHfrU5xK89i25GjPjy0Q2yY6EcIY47tWK+sqPC0Bvxtc5zWzAV547GifwRQbnhwJ; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11926,"purpose":"Sample Token","token":"7adps00t9rod73vew5mbjx7o1h5c5wh0br9nxnmf","user_id":10303}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/11926',
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
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=sA+DJdL75pFuLEc4VWrb3EA5Y7U+A8uKi76kLSlPeYCpeSE+YMGZc4ZHWG+s0HTLV204IEhQpBzO6skhcUfPizAZ3dxJltmKloUeaxLyR2YQAty3kQo90auXIs0U; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11926,"purpose":"Updated Token","token":"7adps00t9rod73vew5mbjx7o1h5c5wh0br9nxnmf","user_id":10303}'
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
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=KTUUmU4nEFpifGhRFuFG6Tqets5IGwxNCiS9BsxbZ4uCnRliiVEmGQfHct/KD+YHIBw5vKUxzqP/gjvXDLmfWoNfYaEnGB5rO89E8HLWXSayHQxsOM9EYhUeWre4; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/11926',
				'DELETE',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=utoyt7gP6ID+0Cwe8QLaKxERvC/Wn2U7zdQXvCSiwPaiabHLlfGHpG74schU2rO1+NbyflfFVFS282K5ogLRP18x9rIyRWmHlcM7/5sGQnaw+6JhZv59QI7sEgrD; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
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
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=V0+Szf9GY7UKmrHCgai6wT7EqpkM9PISoxyfbrN/t17jF5bZOL7499zJ7HGsCWR4UTQmzeurBm1sxQXFtCBRzs5I8I5oPZuDu5MfZP3ha9OW067rb2WaHudASqm5; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/api-tokens/11926',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=su9N2eYAdYHDFT2JWWG1AbR6WFiIRu6dKHxlyK7nBFcqRavOyiYSgKzK6AynjsX5rnlXf704SezIwtFxLc2dTC1HTb8fFhgW6UxyHalLApVX9IQzLYatquTXZD6Z; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
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
					'Date' => ['Thu, 15 Nov 2018 20:19:53 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=PWGhpI1r+M8OaNz3ZRZeN+bAHNhyOYLFkVK6U69mrxdWj389ZLBShGUAru0FWtAiNKXNtXXh5v428dR8pD7NnmQx8ykEhAtzoZ/xkfbL21z9d16h5uIMongD+KeP; Expires=Thu, 22 Nov 2018 20:19:53 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
