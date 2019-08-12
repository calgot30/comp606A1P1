<?php

//this page processes the form that lets a new user register.
//it queries the database, then it inserts the new user into the
//table and starts a unique session for them. Then redirects them
//to the email-confirmation page letting them know
//their registration was a success.
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