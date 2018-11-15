<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientStatisticsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/statistics/total?type=daily&start=2018-01-01&end=2018-12-31&including_vat=0',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 08:22:07 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=OuxKSfim7K/cL88FRUjZ74ILpyPJbmVqMplx4QFJK4fAh6ydvcmo1gN/5iHajOjB8IIkj74pfT0os8vV0yifLZEwDoRNsIWUB2pArA3CgOo4MLCRC+aU8QGrcpJG; Expires=Thu, 22 Nov 2018 08:22:07 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"issued":{"2018-11-14":{"amounts":{"CZK":2730},"amounts_including_vat":{"CZK":2730},"count":3}},"cancelled":{"2018-11-14":{"amounts":{"CZK":2700},"amounts_including_vat":{"CZK":2700},"count":1}},"paid":{"2018-11-14":{"amounts":{"CZK":2700},"amounts_including_vat":{"CZK":2700},"count":1}},"left_to_pay":{"2018-11-14":{"amounts":{"CZK":30},"amounts_including_vat":{"CZK":30},"count":2}},"overdue":[],"invoiced":{"2018-11-14":{"amounts":{"CZK":5430},"amounts_including_vat":{"CZK":5430},"count":4}},"dph":[]}'
			)
		);
	}

}
