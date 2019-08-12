<?php

//this page processes the logout step, from here the users
//session is destroyed, and they are taken back to the login page.
require_once("dbconnect.php");
session_destroy();
header("location: login.php");

?>