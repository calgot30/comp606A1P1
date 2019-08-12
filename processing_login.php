<?php

//takes the login details from login.php and checks
//them against the database to see if they are correct, if 
//they match then they will be redirected to a homepage
//where they can log out and
//also change their password if they wish.

require_once("dbconnect.php");

//define variables to set values from post method
$user = $_POST["username"];
$pass = $_POST["password"];

//querying the database to see if the usernames or passwords match
$query = "SELECT * FROM user_accounts WHERE username='$user' AND password='$pass'";
$result = $connection->query($query);

//declaring number of rows
$rows = $result->num_rows;

//creating an array to store the 
$row = $result->fetch_array(MYSQLI_ASSOC);

//if the row of user and password does not match and is false
if(!$row){
    header("location: incorrect_password.php");
}
//if it does match
else{
    session_start();
	 $_SESSION['logged_in_user']=$user;

     
	header('location: homepage.php');;
}


// for($j = 0 ; $j < $rows ; ++$j){
// if($row['username'] == $user && $row['password'] == $pass){
//     echo("welcome $user");
// }
// else{
//     echo("tough Luck kiddo");
// }
// }






// for($j = 0 ; $j < $rows ; ++$j){
//     $row = $result->fetch_array(MYSQLI_ASSOC);
//     //$result->data_seek($j);
//     echo 'Username: '.($row['username']) .'<br>';
//     //$result->data_seek($j);
//     echo 'Password: '.($row['password']) .'<br>';
// }







// for($j = 0 ; $j < $rows ; ++$j){
//     $row = $result->fetch_array(MYSQLI_ASSOC);
//     for($i = 0; $i < $rows; $i++){
//         if($username == ($row['username']) && $password == ($row['password']))
//         {
//             echo("correct username");
//         }
//         else{
//             echo ("incorrect");
//         }
//     }
// }
// $query = "SELECT * from user_accounts";
// $result = $connection->query($query);
// if(!$result)  die("Fatal error");

$result->close();

?>