<?php

//takes the login details from login.php and checks
//them against the database to see if they are correct, if 
//they match then they will be redirected to the email confirmation
//page and then sent to a homepage where they can log out and
//also change their password if they wish.

require_once("dbconnect.php");

//define variables to set values from post method
$username = $_POST["username"];
$password = $_POST["password"];

//select from user_accounts table
$sql = "select * FROM user_accounts";

$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);

$accounts = "";

while($row = $result->fetch_array(MYSQLI_NUM)){
    $accounts .= <<<END
    <P>$row[0]</p>
    <p>$row[1]</p>
    <p>$row[2]</p>
    
END;
}


$result->close();

//testing my connection to database
//var_dump($result);
?>