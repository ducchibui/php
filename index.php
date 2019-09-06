<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 2</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php
    include "header.php";
?>
<main>
    <h1> Registration for my site</h1>
    <form name="myForm" action="register.php" method="post" onsubmit="return validateForm()">
        <div id="data">
            <label>User name: </label>
            <input type="text" name="userName"><span>*</span><br>
            <label>Email: </label>
            <input type="text" name="email"><span>*</span><br>
            <label>Password: </label>
            <input type="password" name="password"><span>*</span><br>
            <label>Confirm password: </label>
            <input type="password" name="confirmPassword"><span>*</span><br>
        </div>
        <div id="submit">
            <input type="submit" value="Register"><br>
        </div>
    </form>
</main>
<?php
    include "footer.php";
?>
<script>
    function validateForm(){
        var name= document.forms["myForm"]["userName"].value;
        var email = document.forms["myForm"]["email"].value;
        var password = document.forms["myForm"]["password"].value;
        var confirmPassword = document.forms["myForm"]["confirmPassword"].value;
        if (name==null || name ==""){
            alert("Name must be filled out");
            return false;
        } else if (email ==null || email==""){
            alert("Email must be filled out");
            return false;
        } else if (password.length < 6){
            alert("Password must be at least 6 character");
            return false;
        } else if (confirmPassword != password){
            alert("Password is not matched");
            return false;
        }
    }
</script>
</body>
</html>