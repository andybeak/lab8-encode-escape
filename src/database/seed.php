<?php

$host = 'mysql';
$user = '53f178fe';
$password = '53f178fe-e9db-490f-8c30-409b793f6873';

$command = "mysql –h $host -u $user -p{$password} injection_demo < seed.sql";

shell_exec($command);