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
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Sat, 17 Nov 2018 10:04:15 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=5DD6mhJNqoAdSVFlI+xZavejNDssPODSM0TJou5a9JeIVEBOg64XSjmzVB5/3qR61sD4FM9mXEBLhcctWL82KERpXhPYb2Eu+KETT65DaWYDxuchKZkpeaKG6XnR; Expires=Sat, 24 Nov 2018 10:04:15 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
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
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Sat, 17 Nov 2018 10:04:15 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=eY6i5mfiVVZH7JNfkyICv5vHXwOyme25d7QTl0JGnaGnzawBwTUxcPVTaVKeye6OcysH/IZ/7IHiYFae0TDUXXuWxczB1ZH1hlTsBJy/axXGhNPr6Put9h/wWlAv; Expires=Sat, 24 Nov 2018 10:04:15 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"settings":{"accounting_codes":"0","campaign_codes":"0","currency":"CZK","date_format":"j. n. Y","display_intro":"0","enable_client_invoices_link":"1","gosms_client_id":"","gosms_client_secret":"","gosms_connected":"0","gosms_channel_id":"","checklist_basic_settings":"0","checklist_form":"4","checklist_form_tested":"0","checklist_importer":"0","checklist_payment_gateway":"0","checklist_product":"0","invoice_number_padding":"4","language":"cs","load_dic_from_ares":"0","payday":"2 weeks","payment_confirmation":"0","payment_type":"credit card","period_partial":"1 months","period_periodic":"1 months","print_qr_code_on_invoice":"1","proforma":"1","round_czk_function":"","round_eur_function":"","round_usd_function":"","same_variable_symbol_on_proforma_and_invoice":"1","sample_setting":"foo","send_invoice_email_to_client":"1","send_invoice_email_to_user":"1","series":"2013","smartemailing_api_url":"","smartemailing_connected":"0","smartemailing_token":"","smartemailing_username":"","smsconnect_connected":"0","smsconnect_password":"","smsconnect_username":"","use_logo":"1","use_moss_for_non_vat_payer_eu_companies":"0","use_signature":"1","vat":"0","vat_mode":"non-vat-payer","vat_recapitulation_algorithm":"default"}}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/settings/sample_setting',
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
					'Date' => ['Sat, 17 Nov 2018 10:04:15 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=eD+QeVbDW8L4u4Nb4n+AsqiIAQ4k7PiGErVVaUowaZINHSQxcDYPdbFyvrBI0xlglXuKXTuDJl7kcZhNJ4ofiKE5ObbD5LxRQvUDhdLKVtwiznR7qxV1zCOsufBU; Expires=Sat, 24 Nov 2018 10:04:15 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
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
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Sat, 17 Nov 2018 10:04:15 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Sw0wrt6HVPiPu4W6DI1zCgKBgpC2KplaLp0pVIesQgvltYBP3T2cPL8vTTBREwhKriEGEETkayVPxtJL3p3+RjyTdQNYF05EumdjLK6SiRjTmGGmeW22C1OVUV2q; Expires=Sat, 24 Nov 2018 10:04:15 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
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
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Sat, 17 Nov 2018 10:04:15 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=9mcCPtz3GQyG3ZPeYd0OsYOxLsd2KSPo52RX5MrokXCIRCmlAElBcQkFW6OtVCsvYQd9sKlD5SGydkFx4pfgNETPe7STdsoOhECSLMN4SrqSMcmzlqfKKqwMzyrB; Expires=Sat, 24 Nov 2018 10:04:15 GMT; Path=/',
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
				'GET',
				'https://api.fapi.cz/settings/sample_setting',
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
					'Date' => ['Sat, 17 Nov 2018 10:04:15 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=voYMYetEQN5R6wM+h2kq24Yw74PtdQYI0pGPO34aIOeGsaP4/SlvJg4P3A4DSTU4rkncZVV4dmeiFsO0alcsUbC+RkN+86qgG1OM1jaNaVJn7tHVkcWBsA4EAgqk; Expires=Sat, 24 Nov 2018 10:04:15 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Key \\"sample_setting\\" does not exist.","type":"RequestException"}'
			)
		);
	}

}
