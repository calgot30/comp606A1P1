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

<!--  this page asks the user for login information
if the user doesn't fill in a field the form will be unable
to be processed and they will have to fill out the 
parts of the form they left empty.
After they have entered their username and password and their
new password, they will be re-directed to a page telling them
that their password has been changed and they will have
to log in again. -->






<div>

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