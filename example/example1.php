<?php

require __DIR__ . '/../vendor/autoload.php';

use \Ryanhs\Hook\Hook;

Hook::on('init', function(){
	echo 'hello world!' . PHP_EOL;
});

Hook::call('init');
