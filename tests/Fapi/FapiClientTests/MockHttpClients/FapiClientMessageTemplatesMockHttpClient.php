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
				'http://api.fapi.log/message-templates',
				'POST',
				[
					'auth' => ['tester@fapi.cz', 'XZRbVLPigTQpi4Kct4JAq8FZ9'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'name' => 'test',
						'subject' => 'MySubject',
						'body' => '<p>Mu Body</p>',
						'event' => 'custom',
						'type' => 'invoice',
						'automatic_charge_event' => null,
						'message_template_set' => null,
					],
				]
			),
			new HttpResponse(
				201,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Thu, 15 Nov 2018 20:21:27 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"id":73,"name":"test","subject":"MySubject","body":"<p>Mu Body<\\/p>","type":null,"event":"custom","automatic_charge_event":null,"message_template_set":null,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'http://api.fapi.log/message-templates/73',
				'PUT',
				[
					'auth' => ['tester@fapi.cz', 'XZRbVLPigTQpi4Kct4JAq8FZ9'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'name' => 'test',
						'subject' => 'Opraveny subject',
						'body' => '<p>My Body</p>',
						'event' => 'issued_invoice',
						'type' => 'invoice',
						'automatic_charge_event' => null,
						'message_template_set' => null,
					],
				]
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Thu, 15 Nov 2018 20:21:27 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"id":73,"name":"test","subject":"Opraveny subject","body":"<p>My Body<\\/p>","type":"invoice","event":"issued_invoice","automatic_charge_event":null,"message_template_set":null,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'http://api.fapi.log/message-templates/73',
				'GET',
				[
					'auth' => ['tester@fapi.cz', 'XZRbVLPigTQpi4Kct4JAq8FZ9'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Thu, 15 Nov 2018 20:21:27 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"id":73,"name":"test","subject":"Opraveny subject","body":"<p>My Body<\\/p>","type":"invoice","event":"issued_invoice","automatic_charge_event":null,"message_template_set":null,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'http://api.fapi.log/message-templates/73',
				'DELETE',
				[
					'auth' => ['tester@fapi.cz', 'XZRbVLPigTQpi4Kct4JAq8FZ9'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Thu, 15 Nov 2018 20:21:27 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"status":"success"}'
			)
		);
		$this->add(
			new HttpRequest(
				'http://api.fapi.log/message-templates/73',
				'DELETE',
				[
					'auth' => ['tester@fapi.cz', 'XZRbVLPigTQpi4Kct4JAq8FZ9'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				404,
				[
					'Server' => ['nginx/1.14.0 (Ubuntu)'],
					'Date' => ['Thu, 15 Nov 2018 20:21:27 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
	}

}
