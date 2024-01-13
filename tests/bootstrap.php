<?php declare(strict_types = 1);

use Tester\Environment;

if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install Nette Tester using `composer install`';
	exit(1);
}

Environment::setup();

define('LOCKS_DIR', __DIR__ . '/locks');
@mkdir(LOCKS_DIR);
