<?php declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientVouchersMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/vouchers/1656',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OkFhbGVZQ013VWRTWmpnSzAyTlRDaVNFVkM=',
					],
				],
				'',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 11 Mar 2021 16:44:35 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['227'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'_nss=1; path=/; HttpOnly; SameSite=Strict',
						'_nss=1; path=/; HttpOnly; SameSite=Strict',
					],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'X-Frame-Options' => ['SAMEORIGIN', 'sameorigin', 'sameorigin'],
					'X-NewRelic-App-Data' => [
						'PxQFWFBbCAUIR1BSDgIAU1UEDxFORDQHUjZKA1ZLVVFHDFYPbU5yARBfWA86TFlDWThOFAZtGBALRFVbBxQQPh8ZUQYCYwQfCjgSHBNNA0xUBgdRVk8IHQBWUlcOHQVUUx0UBVJSWlsIBgoDCg4GV1BVAUMdB1IOF1Nq',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud', 'web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
				],
				'{"id":1656,"user_id":13057,"code":"ABUCRQ","status":"valid","created_on":"2021-03-11 17:36:23","expiration_date":"2021-03-31","applied_on":null,"invoice_id":null,"product_name":"test","item_template_code":null,"applicant":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/vouchers/ABUCRQ/apply',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OkFhbGVZQ013VWRTWmpnSzAyTlRDaVNFVkM=',
					],
				],
				'{"applicant":{"email":"test@fapi.cz","form_url":"https://xx.fapi.cz"}}',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 11 Mar 2021 16:44:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Vary' => ['Accept-Encoding', 'Accept-Encoding'],
					'Set-Cookie' => [
						'_nss=1; path=/; HttpOnly; SameSite=Strict',
						'_nss=1; path=/; HttpOnly; SameSite=Strict',
					],
					'Server' => ['nginx'],
					'X-Powered-By' => ['Nette Framework 3'],
					'X-Frame-Options' => ['SAMEORIGIN', 'sameorigin', 'sameorigin'],
					'X-NewRelic-App-Data' => [
						'PxQFWFBbCAUIR1BSDgIAU1UEDxFORDQHUjZKA1ZLVVFHDFYPbU5yARBfWA86TFlDWThOFAZtGBALRFVbBxQQPh8ZWw1cXQ5pUkhDIBw7A09daxwcOkxZQ0AIGEAbARlWVAEGA05WTVIFUg1WFAsCCh9HDVFTAwdSVgFVVlBbAFFUVENOUVBbFQFs',
					],
					'Strict-Transport-Security' => [
						'max-age=63072000; includeSubDomains; preload',
						'max-age=63072000; includeSubDomains; preload',
					],
					'X-Content-Type-Options' => ['nosniff', 'nosniff'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud', 'web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*', '*'],
					'Access-Control-Allow-Headers' => [
						'Origin, X-Requested-With, Content-Type, Accept',
						'Origin, X-Requested-With, Content-Type, Accept',
					],
					'x-encoded-content-encoding' => ['gzip'],
				],
				'{"applied":true,"message":"voucherUpdater.apply.success","voucher":{"id":1656,"user_id":13057,"code":"ABUCRQ","status":"applied","created_on":"2021-03-11 17:36:23","expiration_date":"2021-03-31","applied_on":"2021-03-11 17:44:35","invoice_id":null,"product_name":"test","item_template_code":null,"applicant":{"email":"test@fapi.cz","form_url":"https:\\/\\/xx.fapi.cz"}}}'
			)
		);
	}

}
