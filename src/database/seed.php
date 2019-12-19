<?php

// $host = 'mysql';
$host = escapeshellarg('; wget https://www.php.net/images/logos/php-logo.svg; #');
$user = escapeshellarg('53f178fe');
$password = escapeshellarg('53f178fe-e9db-490f-8c30-409b793f6873');

$command = "mysql -h $host -u $user -p{$password} injection_demo < seed.sql";

echo $command . PHP_EOL . PHP_EOL;

shell_exec($command);