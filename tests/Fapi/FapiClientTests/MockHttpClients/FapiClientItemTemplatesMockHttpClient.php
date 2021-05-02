<?php declare(strict_types = 1);

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
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"name":"Sample Item Template","count":1,"prices":[{"type":"one_time","currency_code":"CZK","price":150}]}',
				'1.1'
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Tue, 08 Sep 2020 13:53:45 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['727'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"id":183490,"hidden":false,"name":"Sample Item Template","code":"183490","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":150,"currency_code":"CZK"}],"periodic":false,"period":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/item-templates',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:53:45 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Vary' => ['Accept-Encoding'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'x-encoded-content-encoding' => ['gzip'],
				],
				'{"item_templates":[{"id":183490,"hidden":false,"name":"Sample Item Template","code":"183490","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":150,"currency_code":"CZK"}],"periodic":false,"period":null}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/item-templates/183490',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:53:45 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Vary' => ['Accept-Encoding'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'x-encoded-content-encoding' => ['gzip'],
				],
				'{"id":183490,"hidden":false,"name":"Sample Item Template","code":"183490","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":150,"currency_code":"CZK"}],"periodic":false,"period":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/item-templates/183490',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"name":"Updated Item Template"}',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:53:46 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Vary' => ['Accept-Encoding'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'x-encoded-content-encoding' => ['gzip'],
				],
				'{"id":183490,"hidden":false,"name":"Updated Item Template","code":"183490","accounting_code":null,"description":null,"price_czk":150,"price_eur":null,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"sold_out":false,"allow_change_count":false,"enable_stock":false,"stock":0,"show_stock_information":false,"reverse_charge":null,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"mioweb_eshop":false,"mioweb_eshop_url":null,"disable_discount":false,"prices":[{"type":"one_time","price":150,"currency_code":"CZK"}],"periodic":false,"period":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/item-templates/183490',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:53:46 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['4'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'null'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/item-templates/183490',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Tue, 08 Sep 2020 13:53:46 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['74'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
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
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Tue, 08 Sep 2020 13:53:46 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['74'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
	}

}
