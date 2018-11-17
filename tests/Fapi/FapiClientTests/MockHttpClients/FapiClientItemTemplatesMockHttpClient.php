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
				'POST',
				'https://api.fapi.cz/item-templates',
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
					'Date' => ['Sat, 17 Nov 2018 10:06:00 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=t26BWn0Aw1QZXIYg/rD8M5LIzwvIAZr/ASPDjUpTslCjRlBUTpILB6js2AAYhXU1/vf5eaUSVER2qXmmnSWoBVw/nvbXTWcBRTXVcrByM/dXUpMdRg7JNJ7LLci6; Expires=Sat, 24 Nov 2018 10:06:00 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":97109,"hidden":false,"name":"Sample Item Template","code":"97109","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":"150.000000","currency_code":"CZK"}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/item-templates',
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
					'Date' => ['Sat, 17 Nov 2018 10:06:00 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Q2tFIWTWpjERdzYX3hGfZMVVv80UYmHalOkjPKSDz29hihKfp6R+N5wYzG5naZpkDl2JDwgBaI2/TC0utuR6ieOSj4OuXS7aCvc/cT8Rz+n/PHpIt+MiFpmdZ6Da; Expires=Sat, 24 Nov 2018 10:06:00 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"item_templates":[{"id":97109,"hidden":false,"name":"Sample Item Template","code":"97109","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":"150.000000","currency_code":"CZK"}]}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/item-templates/97109',
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
					'Date' => ['Sat, 17 Nov 2018 10:06:00 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=NtYJU543Z5qcvAtvV2btUzDkn8/P2yIdWG+qNKKxOqhHGmeE4KDQpkcQfIy8QGKILzYdrbnWRrInZoBvVDMJBKK83y72G5nTAUoWXGDxR/HY1Jk/P+5lNKd4EV9U; Expires=Sat, 24 Nov 2018 10:06:00 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":97109,"hidden":false,"name":"Sample Item Template","code":"97109","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":"150.000000","currency_code":"CZK"}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/item-templates/97109',
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
					'Date' => ['Sat, 17 Nov 2018 10:06:00 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=0tH4Ch7wxnrOpsg2w9rhHadM9Ve/1o69vlzImjDRF4pkQ44C8zHVpT+RPVQrlyEWNA77MbVEMstfifDeGoZlDG8D3vxqoBbw5tmHCgyerShFLgfpoW2RFEfP5oAQ; Expires=Sat, 24 Nov 2018 10:06:00 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":97109,"hidden":false,"name":"Updated Item Template","code":"97109","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":"150.000000","currency_code":"CZK"}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/item-templates/97109',
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
					'Date' => ['Sat, 17 Nov 2018 10:06:01 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=C1h9DBv2ShGqyBDs7k5dnJvWJ9iWio5Y9w75UZMNhXo4d0u1Km5BlXFzFRujpVDBG16Zk4Adn3hAUBg4RR5sne/G8inspN9ltKT+m9XFthHcNVI+en3kjV5vMGC/; Expires=Sat, 24 Nov 2018 10:06:00 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'null'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/item-templates/97109',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Sat, 17 Nov 2018 10:06:01 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=+o61cu6PWsfC9d+DQkzLIQTGDUT1wevbkiBzyFejPv1bmNXvlWSyIpXvQ/sL0PlX6x3qGpvwmgXTCRSb5ZYd6ItllttP231TXIScSftYluV5btzG0IEG5N5EOD17; Expires=Sat, 24 Nov 2018 10:06:01 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/item-templates/4',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Sat, 17 Nov 2018 10:06:01 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=ZsQzH51riaPCp7UBMPBl4+CgcTsXdnMPQ9PcdGQlRwresUlrrfN1lB65UL+1QixygbbPsYOQqor5RWwItqgO4UmWZqnjqHRevmU30wW+I/zNJxHIfhj3DwQDZlPS; Expires=Sat, 24 Nov 2018 10:06:01 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
