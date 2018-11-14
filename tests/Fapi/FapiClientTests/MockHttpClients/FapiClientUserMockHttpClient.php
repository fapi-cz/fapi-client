<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientUserMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/user',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 16:45:08 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=6fKebZ9Ujs3Eza8PEwKQJN1xAbO4uQKFv9CuhplcqQrjvWK2yGMvn95dpjP21uI+KOwyU9LKrvIlYcwBp3wJ+9ZJpEt81mFS3HCCM3nezHgHCKr4s5siexrAT1QF; Expires=Wed, 21 Nov 2018 16:45:08 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":10303,"plan":"START","ss_plan":null,"ss_trial":false,"ss_free_payment_gateway":false,"username":"test1@slischka.cz","ic":"","expiration_date":null,"trial":"0","sender_email":null,"sender_name":null,"sender_reply_to":null,"emails":["test1@slischka.cz"],"synchronize_billing_info":true,"is_smartselling":true,"is_billed_by_smartselling":true,"billing_user_id":32611,"name":"","registration_date":"2018-09-05","address":{"street":"","city":"","zip":"","country":"CZ"},"default_bank_account_set":10477,"default_logo":null,"default_signature":null,"default_reminder_set":12291,"default_project":23371}'
			)
		);
	}

}
