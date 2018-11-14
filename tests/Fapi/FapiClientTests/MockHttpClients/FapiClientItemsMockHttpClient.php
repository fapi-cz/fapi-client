<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientItemsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/items',
				'POST',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'invoice' => 183480795,
						'name' => 'Sample Item Template',
						'price' => 10.0,
						'count' => 1,
					],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Wed, 14 Nov 2018 15:43:34 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=47ABjdWOZYlRfDhzZgKorrkj8tdQiUZV5UnEMW/agYpd0cwfloc8dUik/eqar/WfVnn4rKRtumUGgIjCi7kc2h5zX8NbMCdQswt0iWBedEdZ4quC4Np4Y4z7DWO6; Expires=Wed, 21 Nov 2018 15:43:34 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":6032124,"invoice":183480795,"name":"Sample Item Template","code":null,"accounting_code":null,"price":10,"count":1,"round_item":false,"correction_item":false,"type":null,"electronically_supplied_service":false,"moss":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/items/6032124',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['count' => 2],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 15:43:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=DY6RUzXRnzuUieo22CRUlzr3A3gYc8DtMV5c6Er7ugWqM0NWNScJX0hsp+efj2VibEtBeDvPl5pb/cixzogIJOyrJJsznhG7DKVX/vBrg+nd07+YrTUwyaCgX8gc; Expires=Wed, 21 Nov 2018 15:43:34 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":6032124,"invoice":183480795,"name":"Sample Item Template","code":null,"accounting_code":null,"price":10,"count":2,"round_item":false,"correction_item":false,"type":null,"electronically_supplied_service":false,"moss":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/items/6032124',
				'DELETE',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 15:43:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=1lYBpzhiPKL40UaOVueJAWJWuYrjXljppjM7wKhdi4b+kelwf2Qm13kHVo847uIIGfNI2c9hortsksrB2IuSVKaWSahKqe/7Rg223ayjWsvv3Y6fRDgu/e7vi2aM; Expires=Wed, 21 Nov 2018 15:43:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'null'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/items/6032124',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Wed, 14 Nov 2018 15:43:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=cDzjPZNvdQdDjzqebr/dkwmqGkL+fsK/UeIrJ2uEq4A63GnL5SBvQVvsSPglMhRmRn0E2LcIE7AqeUpB1yF8ijJ3DLBdlqKJWCSgRfdsXh//jNAcukp04fnCa0yl; Expires=Wed, 21 Nov 2018 15:43:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
	}

}
