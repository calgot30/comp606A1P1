<?php
require_once("dbconnect.php");

//variables for user info
$username = $_POST["username"];
$password = $_POST["password"];

//inserts the new info into the table
$query = "INSERT INTO user_accounts VALUES(NULL, '$username', '$password')";
$result = $connection->query($query);



//starts the session with their unique session ID
    session_start();
    $_SESSION['logged_in_user']=$username; 
   header('location: email_confirmation.php');;


?>