
[![CircleCI](https://circleci.com/gh/fapi-cz/fapi-client.svg?style=shield)](https://circleci.com/gh/fapi-cz/fapi-client)
[![codecov](https://codecov.io/gh/fapi-cz/fapi-client/branch/master/graph/badge.svg)](https://codecov.io/gh/fapi-cz/fapi-client)
[![Maintainability](https://api.codeclimate.com/v1/badges/f364fbba86383aaab443/maintainability)](https://codeclimate.com/github/fapi-cz/php-client/maintainability)

# fapi-cz/fapi-client
Library for accessing FAPI API.

## Requirements
Library fapi-cz/fapi-client requires PHP 7.0 or higher and [fapi-cz/http-client](https://github.com/fapi-cz/http-client).

## Installation
The best way to install fapi-cz/fapi-client is using [Composer](http://getcomposer.org/).

Run command `composer require fapi-cz/fapi-client`.

## How to run tests
1. Create file `tests/php.ini` (you can use file `php-unix.ini` or `php-win.ini` as a template).

2. Run command `vendor/bin/tester -c tests/php.ini tests`.

## How to create client
```php
$clientFactory = new \Fapi\FapiClientFapiClientFactory('https://api.fapi.cz', new \Fapi\HttpClient\GuzzleHttpClient());
$fapiClient = $clientFactory->createFapiClient('Username', 'password');
```

You can also use `\Fapi\HttpClient\GuzzleHttpClient` instead of `\Fapi\HttpClient\CurlHttpClient`.

## Nette DI
```yaml
extensions:
	httpClient: Fapi\HttpClient\Bidges\NetteDI\HttpClientExtension
	fapiClient: Fapi\FapiClient\DI\FapiClientExtension
	
httpClient:
	type: 'guzzle' #default curl
	logging: true #default false
	bar: true #default false

fapiClient:
	username: fapi
	password: fapi
```
