<?php
require_once("dbconnect.php");
session_start();
//checks if the user has logged in and has unique session
//created, otherwise they are redirected to the login page
if(!isset($_SESSION['logged_in_user'])){
    header("location: login.php");
}
?>

<html>

<head>
    <title>email confirmation page For A1P1</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

<h3> This is a confirmation email to let you know that 
     you have successfully created an account.  Press this button
     to proceed to the website. </h3>
     <a href="homepage.php"> <button type="submit" value="redirect">Return to Login</button></a>

</html>