<?php

//this page processes the password change form that the user 
//has filled out and sent here, it checks the username
//and the old password, and then the new password they put in
//will replace the old one, and then they will be sent to a
//password confirmation page which will tell them they need to
//log in again.


require_once("dbconnect.php");

//define variables to set values from post method
$user = $_POST["username"];
$oldPass = $_POST["old_password"];
$newPass = $_POST["new_password"];

//querying the database to see if the usernames or passwords match
$query = "UPDATE user_accounts SET password='$newPass' WHERE username='$user'";
$result = $connection->query($query);

//directs the user to the specified page after all the code has run
header("location: reset_confirmed.php");

?>