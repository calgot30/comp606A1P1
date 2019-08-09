<?php

//this is the php page that connects to the database,
//it incldues the account details for the user that I created.

//all the user details needed to access the server
$user = "login_admin";
$password = "password";
$database = "accounts";
$host = "localhost";

//querying the server to connect
$connection = mysqli_connect($host, $user, $password, $database);

//code I used to check if the connection was successful
//var_dump($connection);

//this is to check if the connection was made successfully.
//If not it will be redirected to the failed to connect.php page.
if($connection == false) {
    header('Location: failed_to_connect.php');
}


?>