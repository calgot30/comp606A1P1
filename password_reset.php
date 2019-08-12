<?php
require_once("dbconnect.php");
session_start();
if(!isset($_SESSION['logged_in_user'])){
    header("location: login.php");
}
?>

<html>

<head>
    <title>Password reset Page For A1P1</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

<!--
asks the user to re-enter their username and current
password, then they also have to enter their new password.
if their username and password are correct then their 
password will be changed to the new password that they
specified, they are then redirected to the reset_confirmed 
page letting them know that they have changed their password
and will be redirected to the login page to log in again.
-->





<div>

<!-- Form that lets the user change their password. Or if they
    change their mind they can go back to the homepage.   -->
    <h3>Please enter your details</h3>
    <form action="change_password.php" method="post">
    <p><span>*required fields</span></p>
    Username:<br>
    <input type="text" name="username"> 
    <span>* </span>
    <br><br>
    Old Password<br>
    <input type="password" name="old_password">
    <span>* </span>
    <br><br>
    New Password<br>
    <input type="password" name="new_password">
    <span>* </span>
    <br><br>
    <button type="submit" value="login">Change Password</button>
    <br><br>
    <a href="homepage.php">Changed your mind? return to homescreen</a> 

</form>
</div>


</html>