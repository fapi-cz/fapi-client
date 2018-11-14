<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

class FapiClientStatisticsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'http://api.fapi.cz.l/statistics/total?type=daily&start=2015-01-01&end=2015-12-31&including_vat=0&form=8806',
				'GET',
				array(
					'auth' => array('tester', 'asdf123jkl;'),
					'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'),
				)
			),
			new HttpResponse(
				200,
				array(
					'Date' => array('Fri, 29 Apr 2016 08:36:23 GMT'),
					'Server' => array(
						'Apache/2.2.29 (Unix) DAV/2 PHP/5.6.20 mod_ssl/2.2.29 OpenSSL/0.9.8zg',
					),
					'X-Powered-By' => array('Nette Framework'),
					'Status' => array('200'),
					'Content-Length' => array('455'),
					'Content-Type' => array('application/json'),
				),
				'{"issued":{"2015-01-12":{"amounts":{"CZK":8610.56},"amounts_including_vat":{"CZK":10416},"count":1736}},"cancelled":[],"paid":[],"left_to_pay":{"2015-01-12":{"amounts":{"CZK":8610.56},"amounts_including_vat":{"CZK":10416},"count":1736}},"overdue":{"2015-01-12":{"amounts":{"CZK":8610.56},"amounts_including_vat":{"CZK":10416},"count":1736}},"invoiced":{"2015-01-12":{"amounts":{"CZK":8610.56},"amounts_including_vat":{"CZK":10416},"count":1736}},"dph":[]}'
			)
		);
	}

}
