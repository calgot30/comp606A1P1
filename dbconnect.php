<?php

$user = "admin";
$password = "password";
$database = "accounts";
$host = "localhost";

$connection = mysqli_connect($host, $user, $password, $database);

var_dump($connection);

?>