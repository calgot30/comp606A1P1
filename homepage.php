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

<!--
    This page is the homescreen for the user once they have
    logged in, it is to show that the database check was 
    successful and their unique session id was created.

    If the session wasn't there they would be re-directed to 
    the login screen.

    From this page they can log out and change their password.
    -->

<head>
    <title>Home Page For A1P1</title>
    <link rel="stylesheet" type="text/css" href="stylesheet_homepage.css" />
</head>

<!-- welcomes the user with their unique session ID 
     and navigation menu.-->
<h1> <?php echo("welcome ".$_SESSION['logged_in_user']."") ?><h1>
<div class="nav header">
    <h2>Demo Page 1 &nbsp &nbsp Demo Page 2 &nbsp &nbsp
    <a href="password_reset.php">Change your password</a>
    &nbsp &nbsp
    <a href="logout.php">Log Out</a>

</html>