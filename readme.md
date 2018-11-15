
[![CircleCI](https://circleci.com/gh/fapi-cz/php-client.svg?style=svg)](https://circleci.com/gh/fapi-cz/php-client)
[![codecov](https://codecov.io/gh/fapi-cz/php-client/branch/master/graph/badge.svg)](https://codecov.io/gh/fapi-cz/php-client)
[![CodeClime](https://codeclimate.com/github/fapi-cz/php-client.png)](https://codeclimate.com/github/fapi-cz/php-client)

# fapi-cz/php-client
Library for accessing FAPI API.

## Requirements
Library fapi-cz/php-client requires PHP 7.0 or higher and [fapi-cz/http-client](https://github.com/fapi-cz/http-client).

## Installation
The best way to install fapi-cz/php-client is using [Composer](http://getcomposer.org/).

Run command `composer require fapi-cz/php-client`.

## How to run tests
1. Create file `tests/php.ini` (you can use file `php-unix.ini` or `php-win.ini` as a template).

2. Run command `vendor/bin/tester -c tests/php.ini tests`.
