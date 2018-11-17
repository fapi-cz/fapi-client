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
				'GET',
				'https://api.fapi.cz/statistics/total?type=daily&start=2018-01-01&end=2018-12-31&including_vat=0',
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
					'Date' => ['Sat, 17 Nov 2018 10:03:52 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=w+/kGczySsTCS/Nv2JePu87VsINRGRUr1oGtNKKipzbtD2M7nkCaxF1NHL7cFYWsZKIafcl9zqvXL163AiwRn8ZCSlnhNNjOfEzlyBFBsmFaG/U09Ui4+EWpNLZA; Expires=Sat, 24 Nov 2018 10:03:52 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"issued":{"2018-11-14":{"amounts":{"CZK":2730},"amounts_including_vat":{"CZK":2730},"count":3},"2018-11-15":{"amounts":{"CZK":30},"amounts_including_vat":{"CZK":30},"count":3},"2018-11-17":{"amounts":{"CZK":2700},"amounts_including_vat":{"CZK":2700},"count":1}},"cancelled":{"2018-11-14":{"amounts":{"CZK":2700},"amounts_including_vat":{"CZK":2700},"count":1}},"paid":{"2018-11-14":{"amounts":{"CZK":2700},"amounts_including_vat":{"CZK":2700},"count":1}},"left_to_pay":{"2018-11-14":{"amounts":{"CZK":30},"amounts_including_vat":{"CZK":30},"count":2},"2018-11-15":{"amounts":{"CZK":30},"amounts_including_vat":{"CZK":30},"count":3},"2018-11-17":{"amounts":{"CZK":2700},"amounts_including_vat":{"CZK":2700},"count":1}},"overdue":[],"invoiced":{"2018-11-14":{"amounts":{"CZK":5430},"amounts_including_vat":{"CZK":5430},"count":4},"2018-11-15":{"amounts":{"CZK":30},"amounts_including_vat":{"CZK":30},"count":3},"2018-11-17":{"amounts":{"CZK":2700},"amounts_including_vat":{"CZK":2700},"count":1}},"dph":[]}'
			)
		);
	}

}
