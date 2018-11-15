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
					'Date' => ['Thu, 15 Nov 2018 08:21:01 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=zSE1bS1dtnQylY/NKQI1UxmhHq69enOTSY5usw97amfolk6yIw91EUawtHkOeLZIroc4kchVCLR3ID/sau3VF+ZDpLE1cQrRc10S2aKsM3g3foCj/680cx+UnRd3; Expires=Thu, 22 Nov 2018 08:21:01 GMT; Path=/',
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
