<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientMessageTemplatesMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'POST',
				'http://api.fapi.log/message-templates',
				[
					'Host' => ['api.fapi.log'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdGVyQGZhcGkuY3o6WFpSYlZMUGlnVFFwaTRLY3Q0SkFxOEZaOQ=='],
				]
			),
			new HttpResponse(
				201,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Sat, 17 Nov 2018 10:05:09 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"id":75,"name":"test","subject":"MySubject","body":"<p>Mu Body<\\/p>","type":null,"event":"custom","automatic_charge_event":null,"message_template_set":null,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'http://api.fapi.log/message-templates/75',
				[
					'Host' => ['api.fapi.log'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdGVyQGZhcGkuY3o6WFpSYlZMUGlnVFFwaTRLY3Q0SkFxOEZaOQ=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Sat, 17 Nov 2018 10:05:09 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"id":75,"name":"test","subject":"Opraveny subject","body":"<p>My Body<\\/p>","type":"invoice","event":"issued_invoice","automatic_charge_event":null,"message_template_set":null,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'http://api.fapi.log/message-templates/75',
				[
					'Host' => ['api.fapi.log'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdGVyQGZhcGkuY3o6WFpSYlZMUGlnVFFwaTRLY3Q0SkFxOEZaOQ=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Sat, 17 Nov 2018 10:05:09 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"id":75,"name":"test","subject":"Opraveny subject","body":"<p>My Body<\\/p>","type":"invoice","event":"issued_invoice","automatic_charge_event":null,"message_template_set":null,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'http://api.fapi.log/message-templates/75',
				[
					'Host' => ['api.fapi.log'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdGVyQGZhcGkuY3o6WFpSYlZMUGlnVFFwaTRLY3Q0SkFxOEZaOQ=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Sat, 17 Nov 2018 10:05:09 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"status":"success"}'
			)
		);
	}

}
