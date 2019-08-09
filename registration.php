<html>

<head>
    <title>Registration Page For A1P1</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

<?php
require_once("dbconnect.php");
?>


<div>

    <h3>Please enter your details</h3>
    <form action="process_registration.php" method="post">
    <p><span>*required fields</span></p>
    Username:<br>
    <input type="text" name="username"> 
    <span>* </span>
    <br><br>
    Password<br>
    <input type="password" name="password">
    <span>* </span>
    <br><br>
    <button type="submit" value="login">Login</button>
</form>
</div>


</html>