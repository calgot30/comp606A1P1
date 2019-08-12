<?php

//takes the login details from login.php and checks
//them against the database to see if they are correct, if 
//they match then they will be redirected to a homepage
//where they can log out and
//also change their password if they wish.

require_once("dbconnect.php");

//define variables to set values from post method
$user = $_POST["username"];
$oldPass = $_POST["old_password"];
$newPass = $_POST["new_password"];

//querying the database to see if the usernames or passwords match
$query = "UPDATE user_accounts SET password='$newPass' WHERE username='$user'";
$result = $connection->query($query);

header("location: reset_confirmed.php");

?>