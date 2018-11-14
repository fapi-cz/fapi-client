<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientItemTemplatesMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/item-templates',
				'POST',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'name' => 'Sample Item Template',
						'count' => 1,
						'prices' => [['type' => 'one_time', 'currency_code' => 'CZK', 'price' => 150]],
					],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Wed, 14 Nov 2018 17:01:25 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=f/4/zJvpIdOdWAxYZ1Bk1PQVRc1ZK9V9fxHtunWmqOsJNUv/KeDEzB9TSBlV/53nc/20fFO5RMr7ys3zkxbb/8p6r8pWVdRYHRBZBNz/XwazWuVmcoLiJ+RIS2s0; Expires=Wed, 21 Nov 2018 17:01:25 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":96779,"hidden":false,"name":"Sample Item Template","code":"96779","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":"150.000000","currency_code":"CZK"}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/item-templates',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 17:01:25 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=LUri5cNph5GQfULKmzXIkwbH5qx/3jsdCPfjfumzBgD2M2eVXxkl+xyW7oSszvKcSwP5P0BnEY0hYonNxN+YzCC4zRi/8AzS3glrvymH1WrD2lyiGuiqK39s18HB; Expires=Wed, 21 Nov 2018 17:01:25 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"item_templates":[{"id":96779,"hidden":false,"name":"Sample Item Template","code":"96779","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":"150.000000","currency_code":"CZK"}]}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/item-templates/96779',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 17:01:25 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=yf4Ep02ogZfqlEcrEBIoijY+zsTU5K3eXzBkGZfLsiuP/rhJp8Js05zXVjrmqmduBstxweL2JRtCtdKpCl0y8nQKwGl2alz8Qa3jzcLJsqDg1INyJWWLZOB6+DcY; Expires=Wed, 21 Nov 2018 17:01:25 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":96779,"hidden":false,"name":"Sample Item Template","code":"96779","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":"150.000000","currency_code":"CZK"}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/item-templates/96779',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['name' => 'Updated Item Template'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 17:01:25 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=F6fLDujdnIsmy0qv82Cu+Z2TKgDn99ELTcJBjwEJmjRrnooSyKXuH/unZGrHK+j+X7j0S8sr+Iiy0PxZXlLTLs+QWg/zKIDXwL6vwKUgPru71VKzApuZcCrabVdg; Expires=Wed, 21 Nov 2018 17:01:25 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":96779,"hidden":false,"name":"Updated Item Template","code":"96779","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":"150.000000","currency_code":"CZK"}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/item-templates/96779',
				'DELETE',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 17:01:25 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=b7WaTBxtyXafhDx0+195xkLd1vDqSWO6Udg/g58G/Z0WkglhbIc/ZVl45B4/tYE5HJ4/JIpzwfdbw8iUma76aDY0Js6Kr67IOH6PQG+B389lCrp5nhixuZY9X+rK; Expires=Wed, 21 Nov 2018 17:01:25 GMT; Path=/',
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
				'https://api.fapi.cz/item-templates/96779',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Wed, 14 Nov 2018 17:01:25 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=TO68vC0TUNhOVPpIASqvHGD2DoAURBB5sxn5tJjKhDJvT0y8+9YmH29e5ZVWQeeFwX9UoCWC0Ukx7JXbUY3UbXup5gb+ukAP/cK0ah6w1sJ0ymSgih4cqtsNi3pu; Expires=Wed, 21 Nov 2018 17:01:25 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/item-templates/4',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Wed, 14 Nov 2018 17:01:25 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Iy8qXg06Ubi+KsThCvSp75bk27tY5n6BQLgq9NPuemuBJAx0a7ftJKt4X/oNPYZIbnsfFTigJSV6rIGQ30y734fVVJId5FjStxRpd0EKZP4WsVusGdz4nigNZwzZ; Expires=Wed, 21 Nov 2018 17:01:25 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
