
[![CircleCI](https://circleci.com/gh/fapi-cz/fapi-client.svg?style=shield)](https://circleci.com/gh/fapi-cz/fapi-client)
[![codecov](https://codecov.io/gh/fapi-cz/php-client/branch/master/graph/badge.svg)](https://codecov.io/gh/fapi-cz/php-client)
[![CodeClime](https://codeclimate.com/github/fapi-cz/php-client.png)](https://codeclimate.com/github/fapi-cz/php-client)

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
```
$clientFactory = new \Fapi\FapiClientFapiClientFactory('https://api.fapi.cz', new \Fapi\HttpClient\GuzzleHttpClient());
$fapiClient = $clientFactory->create('Username', 'password');
```

You can also use `\Fapi\HttpClient\GuzzleHttpClient` instead of `\Fapi\HttpClient\CurlHttpClient`.
