<html>


<!--
    After the user has gone to this page, they have to enter 
    a new username and password.  After which they are 
    redirected to the process_registration page which
    adds their information into the user_accounts
    table.  Then they are redirected to the homepage and
    can then log out and log back in with the new user.
    -->
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
    <button type="submit" value="login">Signup</button>
</form>
</div>


</html>