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
				'POST',
				'https://api.fapi.cz/forms',
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
					'Date' => ['Sat, 17 Nov 2018 10:10:42 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=sA0oAlV/45AVDPHkrCTY/BLsBcczokXxLeKPoOHhfLxXoQ/DaI3l8lLUT8lqAwFc1jggbzdytlkvUMXeYNcNnlS0SLtKjWAjH+GbxV6NI7QjlILuf28HcjR6WKVl; Expires=Sat, 24 Nov 2018 10:10:42 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38834,"path":"0abe5468-ea51-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms',
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
					'Date' => ['Sat, 17 Nov 2018 10:10:42 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=EaAc+ridfAS0P6bc8V43SYMLlagdS3HSuWJ11bcynzsVD894w+qZLaBMAI+ItxVcWw18NCJ2BskPLA5Rog0Or8wL9Ch6oCd775sfUSfzY+XTtHuENdPwN7OI8qJ3; Expires=Sat, 24 Nov 2018 10:10:42 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"forms":[{"id":38771,"path":"77aba226-e829-11e8-b58d-0a483fe6dc7e","name":"test","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":true,"allow_discount_codes":false,"upsell_url":"http:\\/\\/test.cz","allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":false,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":true,"allow_gopay_card":true,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21978,"foreign_series":null,"allow_region_cz":true,"allow_region_sk":true,"allow_region_eu":true,"allow_region_world":true,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"<div style=\\"color: #111; font-family: \'Open Sans\', Arial, sans-serif; width: 420px; margin: 0 auto;\\">\\n<div style=\\"width: 47.5%; float: left;\\"><img src=\\"https:\\/\\/fapi.cz\\/download\\/person-thx.jpg\\" \\/><\\/div>\\n\\n<div style=\\"width: 47.5%; margin-left: 5%; float: left;\\">\\n<div style=\\"font-size: 27px; font-family: \'Open Sans Condensed\'; font-weight: bold; line-height: 1.2em;\\">D\\u011bkujeme<br \\/>\\nza v\\u00e1\\u0161 z\\u00e1jem<\\/div>\\n\\n<p style=\\"line-height: 1.5em;\\">Va\\u0161e objedn\\u00e1vka prob\\u011bhla \\u00fasp\\u011b\\u0161n\\u011b.<\\/p>\\n<\\/div>\\n\\n<div style=\\"clear: both;\\">\\u00a0<\\/div>\\n<\\/div>\\n","error_url":null,"error_content":"<div style=\\"color: #111; font-family: \'Open Sans\', Arial, sans-serif; width: 420px; margin: 0 auto;\\">\\n<div style=\\"width: 47.5%; float: left;\\"><img src=\\"https:\\/\\/fapi.cz\\/download\\/person-thx.jpg\\" \\/><\\/div>\\n\\n<div style=\\"width: 47.5%; margin-left: 5%; float: left;\\">\\n<div style=\\"font-size: 27px; font-family: \'Open Sans Condensed\'; font-weight: bold; line-height: 1.2em;\\">Objedn\\u00e1vku se nepoda\\u0159ilo dokon\\u010dit<\\/div>\\n\\n<p style=\\"line-height: 1.5em;\\">P\\u0159i zpracov\\u00e1n\\u00ed va\\u0161\\u00ed objedn\\u00e1vky nastala chyba.<\\/p>\\n<\\/div>\\n\\n<div style=\\"clear: both;\\">\\u00a0<\\/div>\\n<\\/div>\\n","show_field_phone":true,"show_field_company":true,"show_field_ic":true,"show_field_dic":true,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":true,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":true,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":true},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=77aba226-e829-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=77aba226-e829-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=77aba226-e829-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":"https:\\/\\/form.fapi.cz\\/select-upsell.php?id=77aba226-e829-11e8-b58d-0a483fe6dc7e","items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[{"id":11509,"uuid":"82a523816a8044238d9dedb9896cf2c9","form_id":38771,"checkbox_label":"test","link_href":null,"link_label":null,"is_primary":true}]},{"id":38834,"path":"0abe5468-ea51-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms/38834',
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
					'Date' => ['Sat, 17 Nov 2018 10:10:43 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=GKCIk9PylpkcZlMecsTOT6enxwcCeSHP/TcftRKX6LldGpPWrIEihAHrhRXV8JkAD4owWgHCSHlE5qAssmUfzSwGqwXxHV/ykI9mmlyMjGprU4XVW2S9m2JU/COj; Expires=Sat, 24 Nov 2018 10:10:43 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38834,"path":"0abe5468-ea51-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms/38834?with_payment_methods=1',
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
					'Date' => ['Sat, 17 Nov 2018 10:10:43 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=WAqePG2wb6wvRMN+wm9tY/AsLeg4SBmzY4XpUvk3d1oXythBQoY+kYmtSmDbJWpVDiW/G2opqizsDYMwLZUuC9/0tHYCs8DhKcO/hoFZXv4bHluURqWgsS6h45sF; Expires=Sat, 24 Nov 2018 10:10:43 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38834,"path":"0abe5468-ea51-11e8-b58d-0a483fe6dc7e","name":"Sample Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[],"payment_methods":[{"payment_type":"wire","group":"others","bank":null,"currencies":["EVERY"],"countries":["EVERY"],"is_online":false},{"payment_type":"cash","group":"others","bank":null,"currencies":["EVERY"],"countries":["EVERY"],"is_online":false}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/forms/38834',
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
					'Date' => ['Sat, 17 Nov 2018 10:10:43 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=6EzeE5QbD/JU2ZXa7XhAaIt9YjbRXzZkm2pBOyEa7x93kkGWgOvwuGUNyK7AoG3WdDB0mAPClgi9Av1NUDsskSTk4ZxCTs1gkKhV9S4eFwQU4Znpm2XsvZcK+iG2; Expires=Sat, 24 Nov 2018 10:10:43 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":38834,"path":"0abe5468-ea51-11e8-b58d-0a483fe6dc7e","name":"Updated Form","project":{"id":23371,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"gopay_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":21979,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":15905,"recurring_message_template_set":null,"reminder_set":12291,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":false,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":true,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":false,"first_form":false,"pro_features":{"gopay":false,"message_sms":false,"reminder_sms":false,"trigger_sms":false,"sms":false,"more_reminders":false,"foreign_languages":false,"upsells":false,"form_styling":false,"repayments":false,"periodic_invoices":false,"any":false},"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"url":"https:\\/\\/form.fapi.cz\\/?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=0abe5468-ea51-11e8-b58d-0a483fe6dc7e&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms/899261310',
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
					'Date' => ['Sat, 17 Nov 2018 10:10:43 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Xtek18ikKqg93KOp9M0MibTEAfL/gqm/ylwop2avu47r3tIkktFW9W5+qvM9madvBCGh3/tCoB/sUED+q0j6r4nFX2/zEikLzpF9mO4YLaa5A+ImU2TguwEwodsl; Expires=Sat, 24 Nov 2018 10:10:43 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms/2',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Sat, 17 Nov 2018 10:10:43 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=JBDnBEth9dKaWy5Q4plbBLkImIpr1wtzyFxD0R2jDxXpgRIMksZ3Ai4u+NJEWO/jqm61FhuhypPpyuCBuc6iGdX6nxdX5Dv5XH2T7KNaLu3hd8ZSdGOU9Onh6UH7; Expires=Sat, 24 Nov 2018 10:10:43 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
