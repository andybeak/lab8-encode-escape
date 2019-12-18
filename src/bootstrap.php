<?php

require('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create the logger
$logger = new Logger('demo');
// Now add some handlers
$logger->pushHandler(new StreamHandler(
    __DIR__ . '/../log/' . date('Y-m-d') . '.log',
    Logger::DEBUG)
);