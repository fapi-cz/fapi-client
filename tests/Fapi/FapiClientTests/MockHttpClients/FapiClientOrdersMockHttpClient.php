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
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Sat, 17 Nov 2018 10:02:23 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=0usjiYQ6B8cnAfaMtzNu7cFHMkrk0I+1a6xouYR4ADzD5IQb8wfkGPrdA2I31e/D4aMVjbqcu18gPVDPw0uI9WD0jJJ6cehqzqrgXKEnX5YkaaX0+tOsWi8wweuo; Expires=Sat, 24 Nov 2018 10:02:23 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1387537,"form":38771,"created":"2018-11-17 11:02:23","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":true,"upsells_enabled":false,"upsell_order":null,"client":1105315,"invoice":183494283,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}],"purposes":[],"next_url":"http:\\/\\/test.cz\\/","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/orders/1387537',
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
					'Date' => ['Sat, 17 Nov 2018 10:02:23 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=nXAapPudoQj/jacFdW9SNpQXu79DV1RfIYQ5dkAS7+WMLWjfpPCanzJy4jRVfRwdsT5YUgIoSIbsJ9OULejwwec2Kyuy7EI3v3oqUdpQDinOA6cenomZAR9AJWCw; Expires=Sat, 24 Nov 2018 10:02:23 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1387537,"form":38771,"created":"2018-11-17 11:02:23","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":true,"upsells_enabled":false,"upsell_order":null,"client":1105315,"invoice":183494283,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}],"purposes":[],"next_url":"http:\\/\\/test.cz\\/","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/orders/1387537',
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
					'Date' => ['Sat, 17 Nov 2018 10:02:23 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=iH/wNiCjDJ4mgh64uFJTWO8Dm3zSdObnJ3D7EyBS9IeSb2IK40Q4R3i80Flx/iGPTHP4DUllRuHyBsL5rNOcJXWIuyQqm3zDOtLBo0dc8auxZrZ3kmd8XWG20sKp; Expires=Sat, 24 Nov 2018 10:02:23 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1387537,"form":38771,"created":"2018-11-17 11:02:23","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":false,"upsells_enabled":false,"upsell_order":null,"client":1105315,"invoice":183494283,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}],"purposes":[],"next_url":"https:\\/\\/form.fapi.cz\\/success?id=77aba226-e829-11e8-b58d-0a483fe6dc7e&orderNumber=201830003","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false}'
			)
		);
	}

}
