<?php
include '../control/Registration_process.php';
?>

<!DOCTYPE html> 
<html>

<body>
<head>
    <link rel="stylesheet" type="text/css" href="../cs/style.css">
</head>
<div class="register-container">
    <h1>Registration Form</h1>
    <p>Register here</p>



    <form action="" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="uname"><br><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="myemail"><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="pass"><br><br>
        <label for="file">Upload profile Picture:</label>
        <input type="file" id="file" name="myfile"><br><br>
        <label>Select Role:</label>

<select name="role">
    <option value="employee">Employee</option>
    <option value="admin">Admin</option>
</select>

        
        <input type="submit" name="register" value="Register">
        


<br><br>
<p>If you already have an account? 
<a href="login.php">Sign In</a>
</p>
</form>
</div>
</body>
</html>