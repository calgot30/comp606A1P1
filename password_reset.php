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

<!--Javascript function to check the text boxes in the forms
    if they are empty, the script will trigger an event, 
    a pop up box will tell the user to fill in the empty text
    boxes. They will not be able to continue until they do so.-->
    <script>
function validateForm(){
    var x = document.forms["myForm"]["username"].value;
    var y = document.forms["myForm"]["old_password"].value;
    var z = document.forms["myForm"]["new_password"].value;
    if(x == "" || y == "" || z == ""){
        alert("All fields must be filled out");
        return false;
    }
}
</script>
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
    <form name ="myForm" action="change_password.php"
          onsubmit="return validateForm()" method="post">
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