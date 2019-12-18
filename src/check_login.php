<?php

$mysqli = new mysqli('mysql', '53f178fe', '53f178fe-e9db-490f-8c30-409b793f6873', 'injection_demo');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM users WHERE username=" . $_POST['username'] . '" AND password="' . $_POST['password'] . '"');