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
						'allow_wire' => true,
						'allow_cash' => true,
					],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Thu, 15 Nov 2018 10:24:28 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=J5mO3oVdn7AZ+1ugpPZmcBEppE15/j5A++cyArn/w5zlnrIHNWKkeucIEDCSAjD13svAsx/hI9eEXwQu1mDzEOm8+iHAuhhELmszpoTrPnTA9DGUzg2Te7fxHEWn; Expires=Thu, 22 Nov 2018 10:24:28 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38784,"path":"a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
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
					'Date' => ['Thu, 15 Nov 2018 10:24:28 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Y+BiDEpzX3w1ZZnNUARQP6DGw7Lm9UTu40Uro/yvm7QkWojCJYr/B6STVM91XpwyL1Gai0P4f0Kg3PvD2c7KyVhxLmJ1NxZnPQU4j7X25i/2EDDoT55eVBJXLi2W; Expires=Thu, 22 Nov 2018 10:24:28 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"forms":[{"id":38771,"path":"77aba226-e829-11e8-b58d-0a483fe6dc7e","name":"test","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":true,"allow_discount_codes":false,"upsell_url":"http:\\/\\/test.cz","allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":false,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":true,"allow_gopay_card":true,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21978,"foreign_series":null,"allow_region_cz":true,"allow_region_sk":true,"allow_region_eu":true,"allow_region_world":true,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"<div style=\\"color: #111; font-family: \'Open Sans\', Arial, sans-serif; width: 420px; margin: 0 auto;\\">\\n<div style=\\"width: 47.5%; float: left;\\"><img src=\\"https:\\/\\/fapi.cz\\/download\\/person-thx.jpg\\" \\/><\\/div>\\n\\n<div style=\\"width: 47.5%; margin-left: 5%; float: left;\\">\\n<div style=\\"font-size: 27px; font-family: \'Open Sans Condensed\'; font-weight: bold; line-height: 1.2em;\\">D\\u011bkujeme<br \\/>\\nza v\\u00e1\\u0161 z\\u00e1jem<\\/div>\\n\\n<p style=\\"line-height: 1.5em;\\">Va\\u0161e objedn\\u00e1vka prob\\u011bhla \\u00fasp\\u011b\\u0161n\\u011b.<\\/p>\\n<\\/div>\\n\\n<div style=\\"clear: both;\\">\\u00a0<\\/div>\\n<\\/div>\\n","error_url":null,"error_content":"<div style=\\"color: #111; font-family: \'Open Sans\', Arial, sans-serif; width: 420px; margin: 0 auto;\\">\\n<div style=\\"width: 47.5%; float: left;\\"><img src=\\"https:\\/\\/fapi.cz\\/download\\/person-thx.jpg\\" \\/><\\/div>\\n\\n<div style=\\"width: 47.5%; margin-left: 5%; float: left;\\">\\n<div style=\\"font-size: 27px; font-family: \'Open Sans Condensed\'; font-weight: bold; line-height: 1.2em;\\">Objedn\\u00e1vku se nepoda\\u0159ilo dokon\\u010dit<\\/div>\\n\\n<p style=\\"line-height: 1.5em;\\">P\\u0159i zpracov\\u00e1n\\u00ed va\\u0161\\u00ed objedn\\u00e1vky nastala chyba.<\\/p>\\n<\\/div>\\n\\n<div style=\\"clear: both;\\">\\u00a0<\\/div>\\n<\\/div>\\n","show_field_phone":true,"show_field_company":true,"show_field_ic":true,"show_field_dic":true,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":true,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":true,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":true},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=77aba226-e829-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=77aba226-e829-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=77aba226-e829-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":"https:\\/\\/form.fapi.cz\\/select-upsell.php?id=77aba226-e829-11e8-b58d-0a483fe6dc7e","items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[{"id":11509,"uuid":"82a523816a8044238d9dedb9896cf2c9","form_id":38771,"checkbox_label":"test","link_href":null,"link_label":null,"is_primary":true}]},{"id":38784,"path":"a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms/38784',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 10:24:28 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=kkuLkBq98MRsVguwNP7WrkYFbQbvQKevfC1plgu68/YeQI90uRQ9ubsNrWLVRAvlZWfLiF4qHhPp4a5wFJy0RSQPxvoCXqJvPHgq+uhdEtC7Nw8Htq8akZ05bQmz; Expires=Thu, 22 Nov 2018 10:24:28 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38784,"path":"a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms/38784?with_payment_methods=1',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 10:24:29 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Kad/EjG+mUM9RLJvDT5biDvd5gV70YZ1EuwipWzz8G3d1ZEv4KSCEoReYDEcSsmx17BlFZ+c/Hmu0N5Bhth/n0a5miRCBeDJ3kpTHDPkDPZypgq0/pitl00gWdrs; Expires=Thu, 22 Nov 2018 10:24:29 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38784,"path":"a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[],"payment_methods":[{"payment_type":"wire","group":"others","bank":null,"currencies":["EVERY"],"countries":["EVERY"],"is_online":false},{"payment_type":"cash","group":"others","bank":null,"currencies":["EVERY"],"countries":["EVERY"],"is_online":false}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/forms/38784',
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
					'Date' => ['Thu, 15 Nov 2018 10:24:29 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=mM33Ccz/yCq85aWoLUWa6WYbbcjdedc/eHDmsr1Rdn6cxBVWFChpLS/MeDtL+Bx8mpZ567zuj02mxcJtAR7BfGperlubGK8eta7YMyDcrWVZMkVGJvk7epFXeMUX; Expires=Thu, 22 Nov 2018 10:24:29 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38784,"path":"a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","name":"Updated Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":true,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":false,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=a22db51e-e8c0-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
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
					'Date' => ['Thu, 15 Nov 2018 10:24:29 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=YrSQuwTjwNVfM6kOrrW59XRQqyIpOtrXRUsvwCMX/yrFk65LSzh7Ef3flQBENEaqnW3/eG+IEM5CHV2SZTe2G6NFli6KpiH7A+qsEP+6iu/KTUoUKgDBM0jVv8Cd; Expires=Thu, 22 Nov 2018 10:24:29 GMT; Path=/',
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
					'Date' => ['Thu, 15 Nov 2018 10:24:29 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=95oNSGVoSJE53fkY9T++uTBmY/wYa9Wyq5EWA0zq5LKxEv3Ab4ktVEgzTTfLdNJqxvD0FXfiBkztUvRIvsHKwylEiHDpYk2JFIO5dezXuJXgkGuuTBTrvr78WZA9; Expires=Thu, 22 Nov 2018 10:24:29 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
