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
				'https://api.fapi.cz/orders',
				'POST',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'form' => 38771,
						'first_name' => 'John',
						'last_name' => 'Smith',
						'email' => 'john.smith@example.com',
						'phone' => '+420123456789',
						'company' => 'Sample Company Inc.',
						'ic' => '12345678',
						'dic' => 'CZ12345678',
						'address' => [
							'street' => 'Street',
							'city' => 'City',
							'zip' => '123 45',
							'country' => 'CZ',
						],
						'shipping_address' => [
							'name' => 'Sherlock',
							'surname' => 'Holmes',
							'street' => '221b Baker Street',
							'city' => 'London',
							'zip' => 'NW1 6XE',
							'country' => 'GB',
						],
						'items' => [
							[
								'name' => 'Sample Item',
								'price_czk' => 2700.0,
								'price_eur' => 100.0,
								'vat' => 21,
								'count' => 1,
								'including_vat' => false,
							],
						],
						'payment_type' => 'wire',
						'bank' => 'wire',
						'pending' => true,
					],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Wed, 14 Nov 2018 16:23:38 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=tEYIkEFQMd3VX3m3dIk+NcfLWBVhlgQU096+mJPDh+BHqmNqQt7eZ1j366F+QP+dCzxLRyZoFg6e2ymIZq/6EKPT+GQq/rE5kmPFJD/e2xnQ9ZKJm675joZC4PcV; Expires=Wed, 21 Nov 2018 16:23:37 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1381395,"form":38771,"created":"2018-11-14 17:23:38","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":true,"upsells_enabled":false,"upsell_order":null,"client":1105315,"invoice":183482547,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}],"purposes":[],"next_url":"http:\\/\\/test.cz\\/","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/orders/1381395',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 16:23:38 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=GGOOnG/GxC7+DpjogDpewbwwfQxJVxW6IQywdpywf5FOFQCmZDQ8KBVQKMc4WJc9+0AiIcQTatNSpHh9mN6u4ctk3heroeYKvwzptcsAY+vcG77VI3JY9sZQgMQo; Expires=Wed, 21 Nov 2018 16:23:38 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1381395,"form":38771,"created":"2018-11-14 17:23:38","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":true,"upsells_enabled":false,"upsell_order":null,"client":1105315,"invoice":183482547,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}],"purposes":[],"next_url":"http:\\/\\/test.cz\\/","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/orders/1381395',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'pending' => false,
						'upsells' => [
							[
								'name' => 'Sample Upsell',
								'price_czk' => 270.0,
								'price_eur' => 10.0,
								'vat' => 21,
								'count' => 1,
								'including_vat' => false,
							],
						],
					],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 16:23:38 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=ohHE7TjGpN8I/dtG+MpCBlvnnbPv97t0m1uuATekB8L2VUYjlvIkAFX6rjWvogDQtnhjYErQ794/iaDRcXFQi/HrxhGqrgCFOYzg97t50WCau8RA5ZI8uK29KEen; Expires=Wed, 21 Nov 2018 16:23:38 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1381395,"form":38771,"created":"2018-11-14 17:23:38","first_name":"John","last_name":"Smith","email":"john.smith@example.com","phone":"+420123456789","company":"Sample Company Inc.","ic":"12345678","dic":"CZ12345678","ic_dph":null,"address":{"street":"Street","city":"City","zip":"123 45","country":"CZ","company":null},"shipping_address":{"name":"Sherlock","surname":"Holmes","street":"221b Baker Street","city":"London","zip":"NW1 6XE","country":"GB","company":null},"payment_type":"wire","bank":"wire","currency":null,"repayment":false,"simplified":false,"pending":false,"upsells_enabled":false,"upsell_order":null,"client":1105315,"invoice":183482547,"form_url":null,"form_title":null,"session_id":null,"google_analytics_client_id":null,"google_analytics_transaction_data":null,"gopay_payment":null,"ip_address":null,"terms_accepted":false,"terms_text":null,"items":[{"item_template":null,"name":"Sample Item","description":null,"price_czk":2700,"price_eur":100,"price_usd":0,"repayment_amount_czk":0,"repayment_amount_eur":0,"repayment_amount_usd":0,"vat":0,"including_vat":false,"count":1,"type":null,"electronically_supplied_service":false,"pohoda_accounting":null,"pohoda_centre":null,"pohoda_store":null,"pohoda_stock_item":null}],"purposes":[],"next_url":"https:\\/\\/form.fapi.cz\\/success?id=77aba226-e829-11e8-b58d-0a483fe6dc7e&orderNumber=201830001","gateway_post_data":null,"payment_gateway":false,"inline_payment_gateway":false}'
			)
		);
	}

}
