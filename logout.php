<?php
require_once("dbconnect.php");
session_destroy();
header("location: login.php");

?>