<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientClientsMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/clients',
				'POST',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['email' => 'test-Fapi@fabik.org'],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Wed, 14 Nov 2018 12:07:23 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=VoLfU98w+EKzdr6QWMPSA+xuBe9EEuU5pdFSmMD0lXt38Iyw4i3fjtE2I7s1B7veuecDRLCYijGUBVoSOgNLaof1XX5FcMj9sJbkpl2PPhIBftJHzeIRTnYq0lR6; Expires=Wed, 21 Nov 2018 12:07:23 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1104855,"email":"test-Fapi@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/clients?email=test-Fapi%40fabik.org&limit=1',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 12:07:23 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=Ba6wSMyKgLxqx1vaZdemhQ3ih9zyI9dbGlvq6iklcaVNQkgkxzF8PnYvaezSgWS7QwSWpAelE68ANUzpNqRsG8PsSxX2ByxQQsXCXtaEq9uoz5ZcjyH1+zvcrOVz; Expires=Wed, 21 Nov 2018 12:07:23 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"clients":[{"id":1104855,"email":"test-Fapi@fabik.org","tax_payer":false}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/clients/1104855',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 12:07:23 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=1Gx7mV2PUgfkEtTDUvMXcWPlXXsOaYc+1thTzp7DGYE2tg7bb+GBz9/exwjGaSqQFSRCEf/A1FubnpJrjvofjsJcpPJnL81U5CfdtT/i0dPmwtg1iec/KI9Npps+; Expires=Wed, 21 Nov 2018 12:07:23 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1104855,"email":"test-Fapi@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/clients/1104855',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => ['email' => 'test-Fapi-2@fabik.org'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 12:07:23 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=tJnr38jfr9S/Aik4OrWRgOaYnVqMSYGVv79SBNpP3nRs3tqIlYPW49wSZnZM8O3s3hmh43cxLbhcRayF3zPed1c3lKfSqNmFU75kZcMj8iVylwI81ri0GRx4/iIe; Expires=Wed, 21 Nov 2018 12:07:23 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1104855,"email":"test-Fapi-2@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/clients/1104855',
				'DELETE',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Wed, 14 Nov 2018 12:07:24 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=eWsFVOPY4erFsYz85oyr/GY8pPf6tpYmdeUgMJXk+1vwaKXc7CFlO0NG65J46irQrZ8ulE8a/+WOxRYH4TTOS/F8C1ScrJCu17sjh7iWOtcIG8niTmAEbwUoUSnJ; Expires=Wed, 21 Nov 2018 12:07:24 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'null'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/clients/1104855',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Wed, 14 Nov 2018 12:07:24 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=kgibd+sblRNJLtXIlr0F8yD46xcELqI2tlrO86O+abCfyxZZ46xp6M1VR7gZ4eBWoaL/gLxDwjq5Ut5peOxv9R2iFqo87GT/w1NMIhlNhqpNozWwDaSzjqG7sQBx; Expires=Wed, 21 Nov 2018 12:07:24 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/clients/1',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Wed, 14 Nov 2018 12:07:24 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=7mvxoYESNezAtScrh04v2W59qFQW8S4Zyb0canLomqhcAb0mTQvnT+hlXUBtETO30cKDJ32mABAr2/0wf0ZxJSg41dCi+JYx1NIFv36+vLmgAiIiSaTjzRH03M4P; Expires=Wed, 21 Nov 2018 12:07:24 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
