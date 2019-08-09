<?php
require_once("dbconnect.php");

$id = null;
$username = $_POST["username"];
$password = $_POST["password"];

$statement = $mysqli->prepare("INSERT INTO user_accounts(username,
password) values(?, ?)");

$statement->bind_param("ss", $username, $password);
$statement->execute();

if($statement->affected_rows == 1){
    echo "<p>user added</p>";
}

$statement->close();
?>