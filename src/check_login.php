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

$sql = 'SELECT * FROM users
    WHERE username = :username
    AND password = :password';

$preparedStatement = $dbh->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

$preparedStatement->execute([':username' => $_GET['username'], ':password' => $_GET['password']]);

$result = $preparedStatement->fetchAll();

$success = sizeof($result) === 1;

$logger->info("User " . $_GET['username'] . " login success [" . (bool)$success . "]");

if (false === $success) {
    $message = urlencode("That user or password combination is not recognized");
    header('Location: login.php?error=' . $message);
} else {
    // the user is logged in, proceed
    echo "logged in";
}