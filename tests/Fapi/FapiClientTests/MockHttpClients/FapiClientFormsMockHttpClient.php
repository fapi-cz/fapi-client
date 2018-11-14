<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientFormsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms',
				'POST',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'name' => 'Sample Form',
						'project' => 23371,
						'series' => 21979,
						'message_template_set' => 15905,
						'reminder_set' => 12291,
						'currency' => 'by-country',
						'reverse_charge' => 'disabled',
						'thanks_content' => '',
						'error_content' => '',
					],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Wed, 14 Nov 2018 13:25:22 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=S3/Biy+Dygxc2RPvHCayxrHFSwY2b0bD9QC/lX/Nmi/kT/8WgUYItcG5Z6f22qDrL+6EMFaiSk0RMPuObEzDlE4+t8lEi8vf6gsv9zCM8ywwL8fuIarAUgjakpPu; Expires=Wed, 21 Nov 2018 13:25:22 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38762,"path":"bd053fc3-e810-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":false,"allow_collect_on_delivery":false,"allow_wire":false,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":true,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 13:25:22 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=ivf0odPGl5eb9RqrUB6Lx3ZbgRKi6otejYfdab5lvZXZ30xFxV7mxwj5kFCy7JNJ5oLvZT1LySrEXSpfDMFsBXlruwRPJpuFueGeThRgJAq0CqYXCmVK/n0vLZth; Expires=Wed, 21 Nov 2018 13:25:22 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"forms":[{"id":38762,"path":"bd053fc3-e810-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":false,"allow_collect_on_delivery":false,"allow_wire":false,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":true,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms/38762',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 13:25:22 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=BfNc2lbUSSGVxbXfEcN3AQB7sk5T9vCTEMIZNSnFcs2RS6klEdVKtHtMBDSGZtrlBZzzrdLoPr0kgQLRkGpushezgqKx0EeHMW7CmesgeIkWk3wrB4z4lkmENvqp; Expires=Wed, 21 Nov 2018 13:25:22 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38762,"path":"bd053fc3-e810-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":false,"allow_collect_on_delivery":false,"allow_wire":false,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":true,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms/38762',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['name' => 'Updated Form', 'deleted' => true],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 13:25:22 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=hJGAdabza2HWUDDQL6RdIW6E0kg7tPvcsNSPIlSs//p5T2epT09cGWRCVBvdovNnkSOhgNOumRxfVKI0Nu/sHu2vnJmC4MHgZzCP9qghUkvhHNE4eSwlwN9dlFrL; Expires=Wed, 21 Nov 2018 13:25:22 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38762,"path":"bd053fc3-e810-11e8-b58d-0a483fe6dc7e","name":"Updated Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":false,"allow_collect_on_delivery":false,"allow_wire":false,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":true,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":false,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=bd053fc3-e810-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms/899261310',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Wed, 14 Nov 2018 13:25:22 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=0w7ZzJW/tywafL4vF0Yp3A6KrfzrkLKqFi8r4V56VUC0fmrYUP+nsktd02Ys2cqQLtH5Zwek657ArRzQwMcBqwT0gojcS8u4Gr/S+yWyaZAQG/pVCNgFdBztslH5; Expires=Wed, 21 Nov 2018 13:25:22 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms/2',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Wed, 14 Nov 2018 13:25:22 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=KDhpiIly/oH0fQS13zrIK59mGLV1lOnJrzp2piiZI82oRVfJGw1EAxrzxhfsYETYh4ZgR1q9D1xJY2Nfm8ZU5HYuSHcNG2Z/3l7qrDE21sBY7saYciVXLbXeyILd; Expires=Wed, 21 Nov 2018 13:25:22 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
