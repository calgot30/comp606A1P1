<html>

<?php
require_once("dbconnect.php");
?>

<head>
    <title>Login Page For A1P1</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>


<div>

    <h3>Please enter your details</h3>
    <form action="process_login.php" method="post">
    Username:<br>
    <input type="text" name="username"> <br>
    Password<br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" value="login">

</form>
</div>


</html>