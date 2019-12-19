<?php

$dsn = 'mysql:dbname=injection_demo;host=mysql';
$user = '53f178fe';
$password = '53f178fe-e9db-490f-8c30-409b793f6873';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$sql = 'SELECT * FROM users WHERE username="' . $_POST['username'] .'" AND password="' . $_POST['password'] .'"';

$result = $dbh->query($sql);
