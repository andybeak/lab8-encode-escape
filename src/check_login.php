<?php

require('bootstrap.php');

$dsn = 'mysql:dbname=injection_demo;host=mysql';
$user = '53f178fe';
$password = '53f178fe-e9db-490f-8c30-409b793f6873';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$sql = 'SELECT * FROM users WHERE username="' . $_GET['username'] .'" AND password="' . $_GET['password'] .'"';

$result = $dbh->query($sql);

$logger->info("User " . $_GET['username'] . " login success [" . (bool)$result . "]");

if (false === $result->fetch()) {
    $message = urlencode("That user or password combination is not recognized");
    header('Location: login.php?error=' . $message);
} else {
    // the user is logged in, proceed
    echo "logged in";
}