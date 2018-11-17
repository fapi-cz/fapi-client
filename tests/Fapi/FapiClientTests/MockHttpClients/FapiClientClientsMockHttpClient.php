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
				'POST',
				'https://api.fapi.cz/clients',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				201,
				[
					'Date' => ['Sat, 17 Nov 2018 10:13:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=uPFWkgtY0BN4/2ocvcBXthelkRquvWeuXfQxUb6bnMda8GwVHh1s5L7YjPKSHnhh/IHtO6O0xZNY74KsHuwYwACm6aeENVUP/Ns5WOL15mXBouDdct3kssj8joeO; Expires=Sat, 24 Nov 2018 10:13:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1109390,"email":"test-Fapi@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/clients?email=test-Fapi%40fabik.org&limit=1',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Sat, 17 Nov 2018 10:13:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=dyc7miTYVH++3e8fNB6Zd8XB4CpAehEeDDi7oz6LJYVeIa42l9m4s1Hgn+yw4NMj50U9viiBGsN6r3ZgqdJEAfKCmTSGyAyE2AhM21y87hVlF+/+MBxIzAmp0mcu; Expires=Sat, 24 Nov 2018 10:13:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"clients":[{"id":1109390,"email":"test-Fapi@fabik.org","tax_payer":false}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/clients/1109390',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Sat, 17 Nov 2018 10:13:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=W2UM3uGxuxzfsGahyQiBDBUqdz4QMcxySQeSHeLsRLAywUId1WLNMMSLgtEQ0/Ka8pSMrQqUP2uLd0JBUTCtlfltvWrRqDN3N/n0VyVXUqP4obgcDXnFVcQusiEJ; Expires=Sat, 24 Nov 2018 10:13:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1109390,"email":"test-Fapi@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/clients/1109390',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Sat, 17 Nov 2018 10:13:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=aSTEReTIpn0eGwu7hJDEiXTFmUQp/Dx/tcbt7ocUFo4bbz2a8GMK5gB4Uc5KqLW5CLnHzTyQ6eHqYvHHBRNbkjzFbv18RFuQgdPK/9legZvttq01lDWT0L1Oib42; Expires=Sat, 24 Nov 2018 10:13:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":1109390,"email":"test-Fapi-2@fabik.org","tax_payer":false}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/clients/1109390',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				200,
				[
					'Date' => ['Sat, 17 Nov 2018 10:13:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=kzJOZevPD1bvdXc5zQOtde+U/D4Oj+8mzvN2h6APNN/CNdhW3yWHDTVaX0r91Fy2Mh5xA1VLoGXY2MPtArZJaOaPVfGMr/5AYrBbhjp4e7nY7Rjkmuv5OPkCMPeu; Expires=Sat, 24 Nov 2018 10:13:35 GMT; Path=/',
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
				'GET',
				'https://api.fapi.cz/clients/1109390',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				404,
				[
					'Date' => ['Sat, 17 Nov 2018 10:13:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=OTnNw8WAFbsNWTk9CU/2cYPeEZklicre/PjiCiB6i7oYd2QTIKyWUQ1pClnoLcI5Rij1mXiVW/Gof6F/X7iRUpiTRSUKHTHeZpwSzcvIdBpOnQXtwfeFInfcjT4u; Expires=Sat, 24 Nov 2018 10:13:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/clients/1',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				401,
				[
					'Date' => ['Sat, 17 Nov 2018 10:13:35 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=YMoI23VArmNiVLg8Ij3zlqsxNDhOZPwAlbCPKm0Xybj0LIJCZwR1ywuBQmg7ajEwikLgRfPCaqHonKNrlQRRzMh5bmrx/LVQyJnv0hdTRYoKMAnIif+ywl2BSJWF; Expires=Sat, 24 Nov 2018 10:13:35 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
