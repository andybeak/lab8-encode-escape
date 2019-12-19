<?php

require('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

try {
    $logger = new Logger('demo');
    $logger->pushHandler(new StreamHandler(
            __DIR__ . '/log/' . date('Y-m-d') . '.log',
            Logger::DEBUG)
    );
} catch (Throwable $e) {
    echo "Could not instantiate logger because [{$e->getMessage()}]";
}

