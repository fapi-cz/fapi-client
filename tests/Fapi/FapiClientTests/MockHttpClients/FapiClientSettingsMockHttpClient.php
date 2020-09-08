<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientSettingsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'POST',
				'https://api.fapi.cz/settings',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"key":"sample_setting","value":"foo"}',
				'1.1'
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Tue, 08 Sep 2020 13:55:57 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['15'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"value":"foo"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/settings',
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
					'Date' => ['Tue, 08 Sep 2020 13:55:57 GMT'],
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
				'{"settings":{"accounting_codes":"0","campaign_codes":"0","currency":"CZK","date_format":"j. n. Y","display_intro":"0","gosms_client_id":"","gosms_client_secret":"","gosms_connected":"0","gosms_channel_id":"","checklist_basic_settings":"0","checklist_form":"3","checklist_form_tested":"0","checklist_importer":"0","checklist_payment_gateway":"0","checklist_product":"1","language":"cs","load_dic_from_ares":"0","payday":"2 weeks","payment_confirmation":"0","payment_type":"credit card","period_partial":"1 months","period_periodic":"1 months","print_qr_code_on_invoice":"1","proforma":"1","round_function":"","same_variable_symbol_on_proforma_and_invoice":"1","sample_setting":"foo","send_invoice_email_to_client":"1","send_invoice_email_to_user":"1","smsconnect_connected":"0","smsconnect_password":"","smsconnect_username":"","use_moss_for_non_vat_payer_eu_companies":"1","vat":"0","vat_mode":"non-vat-payer","vat_recapitulation_algorithm":"default"}}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/settings/sample_setting',
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
					'Date' => ['Tue, 08 Sep 2020 13:55:58 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['15'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"value":"foo"}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/settings/sample_setting',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"value":"bar"}',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:55:58 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['15'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"value":"bar"}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/settings/sample_setting',
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
					'Date' => ['Tue, 08 Sep 2020 13:55:58 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['4'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'null'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/settings/sample_setting',
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
					'Date' => ['Tue, 08 Sep 2020 13:55:58 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['78'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"message":"Key \\"sample_setting\\" does not exist.","type":"RequestException"}'
			)
		);
	}

}
