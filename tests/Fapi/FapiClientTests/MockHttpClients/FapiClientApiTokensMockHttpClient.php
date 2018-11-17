<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests\MockHttpClients;

use Fapi\HttpClient\HttpRequest;
use Fapi\HttpClient\HttpResponse;
use Fapi\HttpClient\MockHttpClient;

final class FapiClientApiTokensMockHttpClient extends MockHttpClient
{

	public function __construct()
	{
		$this->add(
			new HttpRequest(
				'POST',
				'https://api.fapi.cz/api-tokens',
				[
					'Host' => ['api.fapi.cz'],
					'Content-Type' => ['application/json'],
					'Accept' => ['application/json'],
					'Authorization' => ['Basic dGVzdDFAc2xpc2Noa2EuY3o6cGkxMjB3ck95ek5sYjdwNGlRd1RPMXZjSw=='],
				]
			),
			new HttpResponse(
				400,
				[
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=bSy11NAqgi906Ev0fW57OOCePw8T5itFHSqqsUxRr6Q99HHXY+kpf89o39mgHyJEtiZk0jPGJG02ES87Sq8nRF4Cxgld6K1ndmUhQNSNlhOVRsp0hejGKHR27c9c; Expires=Sat, 24 Nov 2018 10:14:43 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Parameter purpose is required.","type":"ValidationException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'POST',
				'https://api.fapi.cz/api-tokens',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=EILQR9+cdMMVlNyyYRKHy2tv4wBc7CbGzsDNKPNrYqZQeoa1H9wV+oc2m7pwfADO3TnDKEZUALr1VGMmCYw/JPDW8/fy1emLrVy4pGW6Hua9CEyVbLeI+YLNDj86; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11934,"purpose":"Sample Token","token":"3xhromrwp9whlvtrzjp87jby4gxc9iqaeo1il9r5","user_id":10303}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/api-tokens?purpose=Sample+Token',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=84KvuUXYfLeb0RKYf0hnC341T2kXbfwHjF1yJSAkbdywQPFluWDdIGUJHO2A5UiB0AJ9x2OVi7/LRy7+UPdAgCVg8yrymkigcx3+EfGDFH4EeprUw0zo+JbX3ORJ; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"api_tokens":[{"id":11934,"purpose":"Sample Token","token":"3xhromrwp9whlvtrzjp87jby4gxc9iqaeo1il9r5","user_id":10303}]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/api-tokens?purpose=xxx',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=zgng2XN7JXvijZJlw0lSk6li2habYETJWjNcpKo0quSma8Z3dzD13va9dGmLyVPxaed5SORTuVwj32+9oVs7Icj/QyyjRkty7rhd5eZQ649KQdMwDLyjyCnIxl5h; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"api_tokens":[]}'
			)
		);
		$this->add(
			new HttpRequest(
				'GET',
				'https://api.fapi.cz/api-tokens/11934',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=7Kwyq2yhJCHq1czrzW/rVxpO2EDkfsHPmXSdSljpXl6OPxS5uE8nYWdsM3rU1H0WLwc+rzSyuhCQ0bTnYvVHDVCJ2zmDqecWQzoC8M/MlpDflSan5RAf5UZr38Ke; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web5'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11934,"purpose":"Sample Token","token":"3xhromrwp9whlvtrzjp87jby4gxc9iqaeo1il9r5","user_id":10303}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/api-tokens/11934',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=UBfrEBPxFL4SAEDZeSpC3x6hg6U4AmaIMIpsF65JnyUakJLrpEMr/CsphEKqAwB1LJVgNhbM5zF92vhyI0lNNE6derwnVTKN98arOCCV/t5/iRWGUms+ZhDrNYE+; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"id":11934,"purpose":"Updated Token","token":"3xhromrwp9whlvtrzjp87jby4gxc9iqaeo1il9r5","user_id":10303}'
			)
		);
		$this->add(
			new HttpRequest(
				'PUT',
				'https://api.fapi.cz/api-tokens/-1',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=o80MH+wUUfjzAB+d4J+M4Bgm3/C+V8LxFJ0yLil0CE5qcVTkwucsrPbxeioH0V9I9V7QtykMJNYpPuYkt2I3vGVeYQxytgFzEc3MQILADPMMeHx7X6KbFZuniusB; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"Specified resource does not exist.","type":"RequestException"}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/api-tokens/11934',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=K8cET0sKtTvxnC9LOZIJDGW7VS9u5b/Vd//MPb8SnYmLKEUF1dm/gwnMcYFfm7hRZyRyCgsjLZbD2W49rfyW8f+Sn5TbsEGK+Hz0Mcrn35krPUIxrT1slG0R8sH8; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
					'X-Origin-Instance' => ['prd-fapi-web2'],
					'X-Content-Type-Options' => ['nosniff'],
					'X-Frame-Options' => ['sameorigin'],
				],
				'{"status":"success"}'
			)
		);
		$this->add(
			new HttpRequest(
				'DELETE',
				'https://api.fapi.cz/api-tokens/-1',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=YZ+ekR9QyrAgEU/D7c032IhBQGVDrM7wYxaRs2fZZaCcahfOFe/J5w8c3Kteegf7TCtwaI7Irx609PTe3smbFLrFET9laiLXvH/5Tccecg5SQoob3Ymx5v1J+3sc; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
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
				'https://api.fapi.cz/api-tokens/11934',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=gtJq89B2h1xve+AxVoIAXhlLTwlMiMRJ9Rqqa5faJrvdNv1dH0wyIMQqEwUGl39W/yF7eonjSJ0U74RJ4KtENi+cvbwqo7uLcw5Wej0jp7A0DoOVmJkdxZ/9XLrl; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
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
				'https://api.fapi.cz/api-tokens/1',
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
					'Date' => ['Sat, 17 Nov 2018 10:14:44 GMT'],
					'Content-Type' => ['application/json'],
					'Transfer-Encoding' => ['chunked'],
					'Connection' => ['keep-alive'],
					'Set-Cookie' => [
						'AWSALB=06wNSQC7YyIaglQQSZE83m1T4VDsEBsunq/bT08xZQ9TlcwJodnbQ/wO8V36t+pM6JnOypQ2B8NPY1XmuiTAH9jHuxKJ10apnIUPGllWHwjhiNu3Qs11CH3CDjpB; Expires=Sat, 24 Nov 2018 10:14:44 GMT; Path=/',
					],
					'Server' => ['nginx/1.14.0'],
					'X-Powered-By' => ['Nette Framework'],
				],
				'{"message":"You are not authorized for this action.","type":"AuthorizationException"}'
			)
		);
	}

}
