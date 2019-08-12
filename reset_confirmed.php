<?php
/*This page lets the user know that their password reset
has been successful. and that they will have to login again
from the login page, they click the buttona and are redirected
there. */
require_once("dbconnect.php");
?>

<html>

<head>
    <title>password reset confirmation page for A1P1</title>
    <link rel="stylesheet" type="text/css" href="stylesheet_homepage.css" />
</head>
<body>

<div>
<h3> You have successfully changed your password, please
press this button to return to the login page. </h3>
     <a href="login.php"> <button type="submit" value="redirect">Return to Login</button></a>
<div>
</body>
</html>