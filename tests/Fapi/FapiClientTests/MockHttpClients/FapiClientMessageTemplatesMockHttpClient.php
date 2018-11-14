<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

class FapiClientMessageTemplatesMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'api.fapi.cz/message-templates',
				'POST',
				[
					'auth' => ['tester', 'xxx'],
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
					'Date' => ['Tue, 07 Nov 2017 21:12:56 GMT'],
					'Server' => ['Apache/2.4.18 (Ubuntu)'],
					'X-Powered-By' => ['Nette Framework'],
					'Status' => ['201'],
					'Content-Length' => ['177'],
					'Content-Type' => ['application/json'],
				],
				'{"id":27,"name":"test","subject":"MySubject","body":"<p>Mu Body<\\/p>","type":null,"event":"custom","automatic_charge_event":null,"message_template_set":null,"user":3,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'api.fapi.cz/message-templates/27',
				'PUT',
				[
					'auth' => ['tester', 'xxx'],
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
					'Date' => ['Tue, 07 Nov 2017 21:12:56 GMT'],
					'Server' => ['Apache/2.4.18 (Ubuntu)'],
					'X-Powered-By' => ['Nette Framework'],
					'Status' => ['200'],
					'Content-Length' => ['197'],
					'Content-Type' => ['application/json'],
				],
				'{"id":27,"name":"test","subject":"Opraveny subject","body":"<p>My Body<\\/p>","type":"invoice","event":"issued_invoice","automatic_charge_event":null,"message_template_set":null,"user":3,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'api.fapi.cz/message-templates/27',
				'GET',
				[
					'auth' => ['tester', 'xxx'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 07 Nov 2017 21:12:56 GMT'],
					'Server' => ['Apache/2.4.18 (Ubuntu)'],
					'X-Powered-By' => ['Nette Framework'],
					'Status' => ['200'],
					'Content-Length' => ['197'],
					'Content-Type' => ['application/json'],
				],
				'{"id":27,"name":"test","subject":"Opraveny subject","body":"<p>My Body<\\/p>","type":"invoice","event":"issued_invoice","automatic_charge_event":null,"message_template_set":null,"user":3,"files":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'api.fapi.cz/message-templates/27',
				'DELETE',
				[
					'auth' => ['tester', 'xxx'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Tue, 07 Nov 2017 21:12:56 GMT'],
					'Server' => ['Apache/2.4.18 (Ubuntu)'],
					'X-Powered-By' => ['Nette Framework'],
					'Status' => ['200'],
					'Content-Length' => ['20'],
					'Content-Type' => ['application/json'],
				],
				'{"status":"success"}'
			)
		);
	}

}
