<html>

<head>
    <title>Login Page For A1P1</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

<!--  this page asks the user for login information
if the user doesn't fill in a field the form will be unable
to be processed and they will have to fill out the 
parts of the form they left empty.
If they successfully fill out the form they will be sent to 
another page which will check their details against a user 
database and see if their details are correct. -->

<?php
require_once("dbconnect.php");
?>




<div>

    <h3>Please enter your details</h3>
    <form action="processing_login.php" method="post">
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
    <br><br>
    <a href="registration.php">Not a user? Register here</a> 

</form>
</div>


</html>