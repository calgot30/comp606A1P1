<html>


<!--
    After the user has gone to this page, they have to enter 
    a new username and password.  After which they are 
    redirected to the process_registration page which
    adds their information into the user_accounts
    table.  Then they are redirected to the process_registration
    page and are then taken to the homepage.
    
    -->
<head>
    <title>Registration Page For A1P1</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />

<!--Javascript function to check the text boxes in the forms
    if they are empty, the script will trigger an event, 
    a pop up box will tell the user to fill in the empty text
    boxes. They will not be able to continue until they do so.-->
    <script>
function validateForm(){
    var x = document.forms["myForm"]["username"].value;
    var y = document.forms["myForm"]["password"].value;
    if(x == "" || y == ""){
        alert("Name and password must be filled out");
        return false;
    }
}
</script>
</head>

<?php
require_once("dbconnect.php");
?>


<div>

    <h3>Please enter your details</h3>
    <form name ="myForm" action="process_registration.php"
          onsubmit="return validateForm()" method="post">
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