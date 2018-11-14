<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

class FapiClientDiscountCodesMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'api.fapi.cz/discount-codes',
				'POST',
				array(
					'auth' => array('tester', 'xxx'),
					'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'),
					'json' => array(
						'name' => 'test',
						'code' => 'unique',
						'type' => 'percent',
						'validity_type' => 'always',
						'percent_discount' => 5,
					),
				)
			),
			new HttpResponse(
				201,
				array(
					'Date' => array('Tue, 07 Nov 2017 20:59:45 GMT'),
					'Server' => array('Apache/2.4.18 (Ubuntu)'),
					'X-Powered-By' => array('Nette Framework'),
					'Status' => array('201'),
					'Content-Length' => array('103'),
					'Content-Type' => array('application/json'),
				),
				'{"id":123,"name":"test","code":"unique","type":"percent","validity_type":"always","percent_discount":5}'
			)
		);
		$this->add(
			new HttpRequest(
				'api.fapi.cz/discount-codes/123',
				'PUT',
				array(
					'auth' => array('tester', 'xxx'),
					'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'),
					'json' => array(
						'name' => 'new name',
						'code' => 'newUniqCode',
						'percent_discount' => 10,
						'validity_type' => 'range',
						'begin_date' => '2017-01-01',
					),
				)
			),
			new HttpResponse(
				200,
				array(
					'Date' => array('Tue, 07 Nov 2017 20:59:45 GMT'),
					'Server' => array('Apache/2.4.18 (Ubuntu)'),
					'X-Powered-By' => array('Nette Framework'),
					'Status' => array('200'),
					'Content-Length' => array('166'),
					'Content-Type' => array('application/json'),
				),
				'{"id":123,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null,"user_id":3}'
			)
		);
		$this->add(
			new HttpRequest(
				'api.fapi.cz/discount-codes/123',
				'GET',
				array(
					'auth' => array('tester', 'xxx'),
					'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'),
				)
			),
			new HttpResponse(
				200,
				array(
					'Date' => array('Tue, 07 Nov 2017 20:59:45 GMT'),
					'Server' => array('Apache/2.4.18 (Ubuntu)'),
					'X-Powered-By' => array('Nette Framework'),
					'Status' => array('200'),
					'Content-Length' => array('169'),
					'Content-Type' => array('application/json'),
				),
				'{"id":123,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null,"used_count":0}'
			)
		);
		$this->add(
			new HttpRequest(
				'api.fapi.cz/discount-codes',
				'GET',
				array(
					'auth' => array('tester', 'xxx'),
					'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'),
				)
			),
			new HttpResponse(
				200,
				array(
					'Date' => array('Tue, 07 Nov 2017 20:59:45 GMT'),
					'Server' => array('Apache/2.4.18 (Ubuntu)'),
					'X-Powered-By' => array('Nette Framework'),
					'Status' => array('200'),
					'Content-Length' => array('190'),
					'Content-Type' => array('application/json'),
				),
				'{"discount_codes":[{"id":123,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null,"used_count":0}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'api.fapi.cz/discount-codes/123',
				'DELETE',
				array(
					'auth' => array('tester', 'xxx'),
					'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'),
				)
			),
			new HttpResponse(
				200,
				array(
					'Date' => array('Tue, 07 Nov 2017 20:59:45 GMT'),
					'Server' => array('Apache/2.4.18 (Ubuntu)'),
					'X-Powered-By' => array('Nette Framework'),
					'Status' => array('200'),
					'Content-Length' => array('20'),
					'Content-Type' => array('application/json'),
				),
				'{"status":"success"}'
			)
		);
	}

}
