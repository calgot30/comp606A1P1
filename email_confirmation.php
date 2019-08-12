<?php

//this page checks to see if the user has registered and
//their session id has been set, and 
//then they are told that they can get to the website by pressing
//the button to redirect them to the homepage.
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
    <link rel="stylesheet" type="text/css" href="stylesheet_homepage.css" />
</head>
<body>
<!--
    Lets the user know they have created an account, then they
    can press a button to go to a homepage.
    -->
    <div>
<h3> This is a confirmation email to let you know that 
     you have successfully created an account.  Press this button
     to proceed to the website. </h3>
     <a href="homepage.php"> <button type="submit" value="redirect">Return to Login</button></a>
     <div>
</body>
</html>