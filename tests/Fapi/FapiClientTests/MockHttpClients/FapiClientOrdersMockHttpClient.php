<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientOrdersMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'POST',
				'https://api.fapi.cz/orders',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"form":60693,"first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","address":{"street":"Street","city":"City","zip":"123 45","country":"CZ"},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB"},"items":[{"name":"Sample Item","price_czk":2700,"price_eur":100,"vat":21,"count":1,"including_vat":false}],"payment_type":"wire","bank":"wire","pending":true}',
				'1.1'
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Tue, 08 Sep 2020 13:55:50 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['1532'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"id":2510132,"form":60693,"created":"2020-09-08 15:55:50","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":true,"upsells_enabled":false,"upsell_order":null,"client":1808102,"invoice":185993827,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"shipping_metadata":null,"discount_code":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price":2700,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"prices":[{"currency_code":"CZK","price":2700,"type":"one_time"}]}],"purposes":[],"next_url":"http:\\/\\/fapi.cz\\/","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false,"twisto_payload":null,"stripe":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/orders/2510132',
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
					'Date' => ['Tue, 08 Sep 2020 13:55:50 GMT'],
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
				'{"id":2510132,"form":60693,"created":"2020-09-08 15:55:50","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":true,"upsells_enabled":false,"upsell_order":null,"client":1808102,"invoice":185993827,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"shipping_metadata":null,"discount_code":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price":2700,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"prices":[{"currency_code":"CZK","price":2700,"type":"one_time"}]}],"purposes":[],"next_url":"http:\\/\\/fapi.cz\\/","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false,"twisto_payload":null,"stripe":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/orders/2510132',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"pending":false,"upsells":[{"name":"Sample Upsell","price_czk":270,"price_eur":10,"vat":21,"count":1,"including_vat":false}]}',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:55:50 GMT'],
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
				'{"id":2510132,"form":60693,"created":"2020-09-08 15:55:50","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":false,"upsells_enabled":false,"upsell_order":null,"client":1808102,"invoice":185993827,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"shipping_metadata":null,"discount_code":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price":2700,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"prices":[{"currency_code":"CZK","price":2700,"type":"one_time"}]}],"purposes":[],"next_url":"https:\\/\\/form.fapi.cz\\/success?id=e041b27d-f1da-11ea-a0d2-0a74406df6c8&orderNumber=202030001","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false,"twisto_payload":null,"stripe":null}'
			)
		);
	}

}
