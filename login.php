<?php
require_once("dbconnect.php");
?>


<html>


<head>
    <title>Login Page For A1P1</title>
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
<body>
<!--  this page asks the user for login information
if the user doesn't fill in a field the form will be unable
to be processed and they will have to fill out the 
parts of the form they left empty.
If they successfully fill out the form they will be sent to 
another page which will check their details against a user 
database and see if their details are correct. If not they
will be sent to a separate page which re-directs them back here. 
They can also follow the link to register as a new user.-->






<div>

    <!--Form for login details -->
    <h3>Please enter your details</h3>
    <form name ="myForm" action="processing_login.php" 
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
    <button type="submit" value="login">Login</button>
    <br><br>
    <a href="registration.php">Not a user? Register here</a> 

</form>
</div>

</body>
</html>