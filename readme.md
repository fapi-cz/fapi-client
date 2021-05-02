
[![build](https://github.com/fapi-cz/fapi-client/actions/workflows/main.yml/badge.svg?branch=master)](https://github.com/fapi-cz/fapi-client/actions/workflows/main.yml)
[![codecov](https://codecov.io/gh/fapi-cz/fapi-client/branch/master/graph/badge.svg)](https://codecov.io/gh/fapi-cz/fapi-client)
[![Maintainability](https://api.codeclimate.com/v1/badges/f364fbba86383aaab443/maintainability)](https://codeclimate.com/github/fapi-cz/php-client/maintainability)

# fapi-cz/fapi-client
Library for accessing FAPI API.

## Requirements
Library fapi-cz/fapi-client requires PHP 7.1 or higher and [fapi-cz/http-client](https://github.com/fapi-cz/http-client).

## Installation
The best way to install fapi-cz/fapi-client is using [Composer](http://getcomposer.org/).

Run command `composer require fapi-cz/fapi-client`.

## How to run tests
Run command `vendor/bin/tester -C tests`.

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
