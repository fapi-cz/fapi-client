<?php declare(strict_types = 1);

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
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OlczVXhpMzVQMnBVak1KckpkeHRBTFN0dkM=',
					],
				],
				'{"form":60693,"first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","address":{"street":"Street","city":"City","zip":"123 45","country":"CZ"},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB"},"items":[{"name":"Sample Item","price_czk":2700,"price_eur":100,"vat":21,"count":1,"including_vat":false}],"payment_type":"wire","bank":"wire","pending":true}',
				'1.1',
			),
			new HttpResponse(
				201,
				[
					'Server' => ['nginx/1.26.1'],
					'Date' => ['Fri, 05 Dec 2025 13:07:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['1837'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework 3'],
					'X-Frame-Options' => ['SAMEORIGIN', 'sameorigin'],
					'Set-Cookie' => ['_nss=1; path=/; secure; HttpOnly; SameSite=Strict'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Origin-Instance' => ['loki_app'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'Content-Security-Policy' => ['upgrade-insecure-requests'],
				],
				'{"id":12440538,"form":60693,"created":"2025-12-05 14:07:18","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":true,"upsells_enabled":false,"upsell_order":null,"upsell_step":null,"upsell_pages":[{"form_id":60693,"upsell_url":"http:\/\/fapi.cz","upsell_order":0}],"client":1808102,"invoice":209820339,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"shipping_metadata":null,"discount_code":null,"tracking":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price":2700,"price_czk":2700,"price_eur":100,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"prices":[{"price":2700,"type":"one_time","currency_code":"CZK","metadata":null,"repayment_count":null},{"price":100,"type":"one_time","currency_code":"EUR","metadata":null,"repayment_count":null}]}],"purposes":[],"next_url":"http:\/\/fapi.cz\/?fapiUpsellOrderId=12440538","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false,"twisto_payload":null,"stripe":null,"twisto":null}',
			),
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/orders/12440538',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OlczVXhpMzVQMnBVak1KckpkeHRBTFN0dkM=',
					],
				],
				'',
				'1.1',
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.26.1'],
					'Date' => ['Fri, 05 Dec 2025 13:07:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['1837'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework 3'],
					'X-Frame-Options' => ['SAMEORIGIN', 'sameorigin'],
					'Set-Cookie' => ['_nss=1; path=/; secure; HttpOnly; SameSite=Strict'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Origin-Instance' => ['loki_app'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'Content-Security-Policy' => ['upgrade-insecure-requests'],
				],
				'{"id":12440538,"form":60693,"created":"2025-12-05 14:07:18","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":true,"upsells_enabled":false,"upsell_order":null,"upsell_step":null,"upsell_pages":[{"form_id":60693,"upsell_url":"http:\/\/fapi.cz","upsell_order":0}],"client":1808102,"invoice":209820339,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"shipping_metadata":null,"discount_code":null,"tracking":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price":2700,"price_czk":2700,"price_eur":100,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"prices":[{"price":2700,"type":"one_time","currency_code":"CZK","metadata":null,"repayment_count":null},{"price":100,"type":"one_time","currency_code":"EUR","metadata":null,"repayment_count":null}]}],"purposes":[],"next_url":"http:\/\/fapi.cz\/?fapiUpsellOrderId=12440538","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false,"twisto_payload":null,"stripe":null,"twisto":null}',
			),
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/orders/12440538',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OlczVXhpMzVQMnBVak1KckpkeHRBTFN0dkM=',
					],
				],
				'{"pending":false,"upsells":[{"name":"Sample Upsell","price_czk":270,"price_eur":10,"vat":21,"count":1,"including_vat":false}]}',
				'1.1',
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.26.1'],
					'Date' => ['Fri, 05 Dec 2025 13:07:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['1936'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework 3'],
					'X-Frame-Options' => ['SAMEORIGIN', 'sameorigin'],
					'Set-Cookie' => ['_nss=1; path=/; secure; HttpOnly; SameSite=Strict'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Origin-Instance' => ['loki_app'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'Content-Security-Policy' => ['upgrade-insecure-requests'],
				],
				'{"id":12440538,"form":60693,"created":"2025-12-05 14:07:18","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":false,"upsells_enabled":false,"upsell_order":null,"upsell_step":null,"upsell_pages":[{"form_id":60693,"upsell_url":"http:\/\/fapi.cz","upsell_order":0}],"client":1808102,"invoice":209820339,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"shipping_metadata":null,"discount_code":null,"tracking":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price":2700,"price_czk":2700,"price_eur":100,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"prices":[{"price":2700,"type":"one_time","currency_code":"CZK","metadata":null,"repayment_count":null},{"price":100,"type":"one_time","currency_code":"EUR","metadata":null,"repayment_count":null}]}],"purposes":[],"next_url":"https:\/\/form.fapi.cz\/\/success\/?id=e041b27d-f1da-11ea-a0d2-0a74406df6c8&orderNumber=202530004&path=56d9uiperpp7sfy595lms0sspoakxeaat90a8h5z","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false,"twisto_payload":null,"stripe":null,"twisto":null}',
			),
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/orders?invoice=209820339&limit=1&sources%5B0%5D=form&sources%5B1%5D=api',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OlczVXhpMzVQMnBVak1KckpkeHRBTFN0dkM=',
					],
				],
				'',
				'1.1',
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.26.1'],
					'Date' => ['Fri, 05 Dec 2025 13:07:19 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['1662'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework 3'],
					'X-Frame-Options' => ['SAMEORIGIN', 'sameorigin'],
					'Set-Cookie' => ['_nss=1; path=/; secure; HttpOnly; SameSite=Strict'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Origin-Instance' => ['loki_app'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'Content-Security-Policy' => ['upgrade-insecure-requests'],
				],
				'{"orders":[{"id":12440538,"form":60693,"created":"2025-12-05 14:07:18","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":false,"upsells_enabled":false,"upsell_order":null,"upsell_step":null,"upsell_pages":[{"form_id":60693,"upsell_url":"http:\/\/fapi.cz","upsell_order":0}],"client":1808102,"invoice":209820339,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"shipping_metadata":null,"discount_code":null,"tracking":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price":2700,"price_czk":2700,"price_eur":100,"price_usd":null,"repayment_amount_czk":null,"repayment_amount_eur":null,"repayment_amount_usd":null,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null,"prices":[{"price":2700,"type":"one_time","currency_code":"CZK","metadata":null,"repayment_count":null},{"price":100,"type":"one_time","currency_code":"EUR","metadata":null,"repayment_count":null}]}],"purposes":[]}]}',
			),
		);
	}

}
