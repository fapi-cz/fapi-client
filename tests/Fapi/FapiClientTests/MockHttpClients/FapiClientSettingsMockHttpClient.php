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
				'https://api.fapi.cz/settings',
				'POST',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['key' => 'sample_setting', 'value' => 'foo'],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Wed, 14 Nov 2018 16:28:56 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=yNvbCtzWYPtodTdUobYepu6fztb/Eqd1rlLDw9BIfbyDmlRodH/px5V98wMncgWgbq/HS0r0Qrwq5ipGjTEZam2xhqt9RGKQQSpM9+dnFKq7ESpjNhl16hVZre1d; Expires=Wed, 21 Nov 2018 16:28:56 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"value":"foo"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/settings',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 16:28:56 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=+FFulL4S7exCGGXuW6OqJ6UEtTAe13F3vrqihXMz/nn5q40uGNYElFN9U+0BXKVa7HWCaikJiS5FQRsqQNaZ3k8csyqpanvYnU3DrPW0udiUS2KZYhH4oFcbKMTL; Expires=Wed, 21 Nov 2018 16:28:56 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"settings":{"accounting_codes":"0","campaign_codes":"0","currency":"CZK","date_format":"j. n. Y","display_intro":"0","enable_client_invoices_link":"1","gosms_client_id":"","gosms_client_secret":"","gosms_connected":"0","gosms_channel_id":"","checklist_basic_settings":"0","checklist_form":"3","checklist_form_tested":"0","checklist_importer":"0","checklist_payment_gateway":"0","checklist_product":"0","invoice_number_padding":"4","language":"cs","load_dic_from_ares":"0","payday":"2 weeks","payment_confirmation":"0","payment_type":"credit card","period_partial":"1 months","period_periodic":"1 months","print_qr_code_on_invoice":"1","proforma":"1","round_czk_function":"","round_eur_function":"","round_usd_function":"","same_variable_symbol_on_proforma_and_invoice":"1","sample_setting":"foo","send_invoice_email_to_client":"1","send_invoice_email_to_user":"1","series":"2013","smartemailing_api_url":"","smartemailing_connected":"0","smartemailing_token":"","smartemailing_username":"","smsconnect_connected":"0","smsconnect_password":"","smsconnect_username":"","use_logo":"1","use_moss_for_non_vat_payer_eu_companies":"0","use_signature":"1","vat":"0","vat_mode":"non-vat-payer","vat_recapitulation_algorithm":"default"}}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/settings/sample_setting',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 16:28:56 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=dQrQKFp3+EiQEBIZWNaWkv29KFd9dao3ycnE1r1WX+YN7+gQCYtgo/v7fRotQ1sQWxhKYUjX7olvAsjG6iwUqAHkouAOXzuiHsNB7t6HLhYMK27oKoeSweFnkDS3; Expires=Wed, 21 Nov 2018 16:28:56 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"value":"foo"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/settings/sample_setting',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['value' => 'bar'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 16:28:56 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=1toy+5FSnXQh1Off9Z1+AHSgQ6Me9cafoxFHg7AGdDJ/Y9btGwM9TYBiW7eaLmYq+IyZJhhE5PNZfb36vAvC7Y5YbyqQyOQ7Kyt6D6lpxGpL5tcw4skFeaIzastQ; Expires=Wed, 21 Nov 2018 16:28:56 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"value":"bar"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/settings/sample_setting',
				'DELETE',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 16:28:56 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=EA6mW+OjQFdrUYDYFVGLtvS7/66tnORQdFNPV7ROCSEKMUJJcE6Hvfya+KZmDP4CVdv0cA+xSCv9V3AfdFXMRy2/kwN4R/m6XINTPIalggu3Y8Ge+KOg7L4Aml+L; Expires=Wed, 21 Nov 2018 16:28:56 GMT; Path=/',
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
				'https://api.fapi.cz/settings/sample_setting',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Wed, 14 Nov 2018 16:28:57 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=97MbaYNMGRuJ0naXCWJScBhixNH0cgVpOGWpgq3arH56DmIKvFRYcOyuFJg2GKC7hSTz/zI0Hh5nn5khuOut0V2ugA/MFmhu5zcOFGifpYw/IbKhSk0mYfNRslf1; Expires=Wed, 21 Nov 2018 16:28:57 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Key \\"sample_setting\\" does not exist.","type":"RequestException"}'
			)
		);
	}

}
