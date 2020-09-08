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
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"name":"Sample Form","project":31862,"series":38504,"message_template_set":22232,"reminder_set":16508,"currency":"by-country","reverse_charge":"disabled","thanks_content":"","error_content":"","allow_wire":true,"allow_cash":true}',
				'1.1'
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Tue, 08 Sep 2020 13:45:10 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['3497'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"id":60692,"path":"837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","name":"Sample Form","project":{"id":31862,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_order_bumps":false,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"trial_period":null,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"allow_twisto":false,"gopay_connection":null,"twisto_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_gpay":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":38504,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":22232,"recurring_message_template_set":null,"reminder_set":16508,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"require_field_state":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":true,"max_width":null,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"periodic_days_before":0,"allow_shipping_methods":false,"new_layout":false,"template_settings":[],"url":"https:\\/\\/form.fapi.cz\\/?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"order_bumps":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[],"custom_fields":[],"shipping_methods":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms',
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
					'Date' => ['Tue, 08 Sep 2020 13:45:10 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Vary' => ['Accept-Encoding'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'x-encoded-content-encoding' => ['gzip'],
				],
				'{"forms":[{"id":60692,"path":"837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","name":"Sample Form","project":{"id":31862,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_order_bumps":false,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"trial_period":null,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"allow_twisto":false,"gopay_connection":null,"twisto_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_gpay":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":38504,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":22232,"recurring_message_template_set":null,"reminder_set":16508,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"require_field_state":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":true,"max_width":null,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"periodic_days_before":0,"allow_shipping_methods":false,"new_layout":false,"template_settings":[],"url":"https:\\/\\/form.fapi.cz\\/?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"order_bumps":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[],"custom_fields":[],"shipping_methods":[]}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms/60692',
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
					'Date' => ['Tue, 08 Sep 2020 13:45:10 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Vary' => ['Accept-Encoding'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'x-encoded-content-encoding' => ['gzip'],
				],
				'{"id":60692,"path":"837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","name":"Sample Form","project":{"id":31862,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_order_bumps":false,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"trial_period":null,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"allow_twisto":false,"gopay_connection":null,"twisto_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_gpay":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":38504,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":22232,"recurring_message_template_set":null,"reminder_set":16508,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"require_field_state":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":true,"max_width":null,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"periodic_days_before":0,"allow_shipping_methods":false,"new_layout":false,"template_settings":[],"url":"https:\\/\\/form.fapi.cz\\/?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"order_bumps":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[],"custom_fields":[],"shipping_methods":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms/60692?with_payment_methods=1',
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
					'Date' => ['Tue, 08 Sep 2020 13:45:10 GMT'],
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
				'{"id":60692,"path":"837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","name":"Sample Form","project":{"id":31862,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_order_bumps":false,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"trial_period":null,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"allow_twisto":false,"gopay_connection":null,"twisto_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_gpay":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":38504,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":22232,"recurring_message_template_set":null,"reminder_set":16508,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"require_field_state":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":true,"max_width":null,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":false,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":true,"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"periodic_days_before":0,"allow_shipping_methods":false,"new_layout":false,"template_settings":[],"url":"https:\\/\\/form.fapi.cz\\/?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"order_bumps":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[],"custom_fields":[],"shipping_methods":[],"payment_methods":[{"payment_type":"wire","group":"others","bank":null,"currencies":["EVERY"],"countries":["EVERY"],"is_online":false},{"payment_type":"cash","group":"others","bank":null,"currencies":["EVERY"],"countries":["EVERY"],"is_online":false}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/forms/60692',
				[
					'Host' => ['api.fapi.cz'],
					'verify' => ['1'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => [
						'Basic c2xpc2Noa2FAdGVzdC1mYXBpLmN6OmpJQkFXbEt6ekI2clFWazVZM1QwVnhUZ24=',
					],
				],
				'{"name":"Updated Form","deleted":true}',
				'1.1'
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 08 Sep 2020 13:45:11 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Vary' => ['Accept-Encoding'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web2.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
					'x-encoded-content-encoding' => ['gzip'],
				],
				'{"id":60692,"path":"837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","name":"Updated Form","project":{"id":31862,"name":"Neza\\u0159azeno","is_default":true},"campaign_code":null,"allow_order_bumps":false,"allow_upsells":false,"allow_discount_codes":false,"upsell_url":null,"allow_repayments":false,"automatically_charge_periodic_invoices":false,"repayment_count":null,"allow_recurring":false,"trial_period":null,"period":null,"iteration":null,"end_by":null,"last_date":null,"allow_change_counts":null,"allow_multiple_items":false,"allow_cash":true,"allow_collect_on_delivery":false,"allow_wire":true,"allow_voucher":false,"allow_gopay":false,"allow_twisto":false,"gopay_connection":null,"twisto_connection":null,"dinersclub_connection":null,"allow_gopay_paypal":false,"allow_gopay_sms":false,"allow_gopay_wire":false,"allow_gopay_card":false,"allow_gopay_bitcoin":false,"allow_gopay_gpay":false,"allow_gopay_recurring_payments":false,"require_recurring_terms":false,"recurring_terms_url":null,"proforma":false,"series":38504,"foreign_series":null,"allow_region_cz":false,"allow_region_sk":false,"allow_region_eu":false,"allow_region_world":false,"currency":"by-country","currency_setting":"by-country","currency_code":null,"allowed_currencies":null,"reverse_charge":"disabled","message_template_set":22232,"recurring_message_template_set":null,"reminder_set":16508,"recurring_reminder_set":null,"send_email":false,"thanks_url":null,"thanks_content":"","error_url":null,"error_content":"","show_field_phone":false,"show_field_company":false,"show_field_ic":false,"show_field_dic":false,"show_field_notes":false,"print_email_on_invoice":false,"print_phone_on_invoice":false,"notes_required":false,"print_notes_on_invoice":false,"field_notes_label":"Pozn\\u00e1mka","allow_shipping_address":false,"show_prices_including_vat":false,"language":"cs","invoice_language":"cs","allow_simplified":false,"require_field_name":false,"require_field_phone":false,"require_field_state":false,"allow_terms":false,"allow_privacy_policy":false,"terms_url":null,"allow_custom_css":false,"custom_css_url":null,"responsive":true,"max_width":null,"allow_affilbox_codes":false,"affilbox_conversion_code":null,"affilbox_tracking_code":null,"allow_own_conversion_code":false,"own_conversion_code":null,"pass_utm_codes_to_thanks_page":false,"enable_google_analytics_support":false,"google_analytics_tracking_id":null,"styling":null,"old_default_button_style":false,"deleted":true,"mioweb_eshop":false,"mioweb_eshop_url":null,"active":false,"blocked":false,"disable_create_invoice_automatically":false,"date_to_create_invoice_automatically":null,"allow_changeable_items":false,"allow_email_in_custom_url":false,"allow_variable_symbol_in_custom_url":true,"periodic_days_before":0,"allow_shipping_methods":false,"new_layout":false,"template_settings":[],"url":"https:\\/\\/form.fapi.cz\\/?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8","html_code":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8\\"><\\/script>","html_code_without_style":"<script type=\\"text\\/javascript\\" src=\\"https:\\/\\/form.fapi.cz\\/script.php?id=837e4c0d-f1d9-11ea-a0d2-0a74406df6c8&amp;no-style=1\\"><\\/script>","gateway_url":null,"gateway_html_code":null,"gopay_callback_url":"https:\\/\\/form.fapi.cz\\/gopay-callback","select_upsell_url":null,"items":[],"order_bumps":[],"upsells":[],"item_groups":[],"triggers":[],"discount_codes":[],"changeable_items":[],"purposes":[],"custom_fields":[],"shipping_methods":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/forms/899261310',
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
					'Date' => ['Tue, 08 Sep 2020 13:45:11 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['74'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web1.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
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
				401,
				[
					'Date' => ['Tue, 08 Sep 2020 13:45:11 GMT'],
					'Content-Type' => ['application/json'],
					'Content-Length' => ['85'],
					'Connection' => ['keep-alive'],
					'Server' => ['nginx'],
					'Strict-Transport-Security' => ['max-age=63072000; includeSubDomains; preload'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
					'X-Origin-Instance' => ['web3.prod.fapi.cloud'],
					'Access-Control-Allow-Origin' => ['*'],
					'Access-Control-Allow-Headers' => ['Origin, X-Requested-With, Content-Type, Accept'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
