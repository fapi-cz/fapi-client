<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientDiscountCodesMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/discount-codes',
				'POST',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'name' => 'test',
						'code' => 'unique',
						'type' => 'percent',
						'validity_type' => 'always',
						'percent_discount' => 5,
					],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Thu, 15 Nov 2018 08:47:34 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=tvWAkzil1PScvjC1Heu9cRUicAIV0f7eJGKRLGMmtGou/BioyIn9RbwCakmjkfdHzFDc17eFHhL00ecRJnTlxOrbI2nj6HSshPN2Pi0KTY1OM+pp2f+hnvPGhSVp; Expires=Thu, 22 Nov 2018 08:47:34 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":2625,"name":"test","code":"unique","type":"percent","validity_type":"always","percent_discount":5}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/discount-codes/2625',
				'PUT',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
					'json' => [
						'name' => 'new name',
						'code' => 'newUniqCode',
						'percent_discount' => 10,
						'validity_type' => 'range',
						'begin_date' => '2017-01-01',
					],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 08:47:34 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=hNddgMju3p7Rbcfun0bfl33/jmmSh0rWiyrflYMMXRNMc2wTJ1vEXkNoMWfXkc60fxqJYxPu8fSfOIoYrtL6QOjjUkBriRhxktR8PXohg4crZJsGdxPYUMUtX5fo; Expires=Thu, 22 Nov 2018 08:47:34 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":2625,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/discount-codes/2625',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 08:47:34 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=DrL2poQRNQTvKc+Pya4u7S8alTbYeptLABq2VVWWF7r7CIaRHSVIUXjqH0vspRE2QjIX3g54vtGVMOjEG8Oi/27hEWXmDT1KhYdnrV8wkBKUs2qqBNFGkIuB5txF; Expires=Thu, 22 Nov 2018 08:47:34 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":2625,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null,"used_count":0}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/discount-codes',
				'GET',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 08:47:34 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=HuhnIMmpT/jh8dNCW9nJMQxb26nWabMG89ZKSr4GAGA3i/9MOVx7r/zox1eZSYicoZ3bbL92MOm0ItCm/bzFdDXiOsEg0IcM39hchxa1cPwPfAZ8/QbO5pzpWC3G; Expires=Thu, 22 Nov 2018 08:47:34 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"discount_codes":[{"id":2625,"name":"new name","code":"newUniqCode","type":"percent","validity_type":"range","percent_discount":10,"begin_date":"2017-01-01","end_date":null,"used_count":0}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'https://api.fapi.cz/discount-codes/2625',
				'DELETE',
				[
					'auth' => ['test1@slischka.cz', 'pi120wrOyzNlb7p4iQwTO1vcK'],
					'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Thu, 15 Nov 2018 08:47:34 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=jUY8HVkGy7exz9NlLzZAZm9pOIsbQypd1cnwDEtoc8jm/Il3YHOZDodXD+7s8Vtm8fS78JqadDE6ag02F3O8N2m8tZtOow3A0WNiyXNcLeo1WCi5daJ6dG4/FvJM; Expires=Thu, 22 Nov 2018 08:47:34 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"status":"success"}'
			)
		);
	}

}
