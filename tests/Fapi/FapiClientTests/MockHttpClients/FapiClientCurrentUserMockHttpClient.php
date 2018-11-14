<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

class FapiClientCurrentUserMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'http://api.fapi.cz.l/user',
				'GET',
				array(
					'auth' => array('tester', 'xxx'),
					'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'),
				)
			),
			new HttpResponse(
				200,
				array(
					'Date' => array('Tue, 11 Aug 2015 12:21:42 GMT'),
					'Server' => array('Apache/2.2.29 (Unix) DAV/2 PHP/5.6.6 mod_ssl/2.2.29 OpenSSL/0.9.8zd'),
					'X-Powered-By' => array('Nette Framework'),
					'Status' => array('200'),
					'Content-Length' => array('646'),
					'Content-Type' => array('application/json'),
				),
				'{"id":3,"plan":"VIP","username":"tester","ic":"1234543","expiration_date":null,"trial":"0","sender_email":"testovaci-odesilatel@fabik.org","sender_name":"Testovac\\u00ed odes\\u00edlatel","sender_reply_to":"adresa-pro-odpovedi@fabik.org","emails":["test2@fabik.org"],"synchronize_billing_info":false,"name":"TESTER s.r.o.","dic":"CZ12345678","registration_date":"2012-11-15","notification_url":"http:\\/\\/test.fapi.cz\\/notification\\/n.php","address":{"street":"Testovac\\u00ed 32","city":"Hong Kong","zip":"544 00W","country":"CZ"},"default_bank_account_set":3,"default_logo":527,"default_signature":3,"default_reminder_set":3,"default_project":5003}'
			)
		);
	}

}
