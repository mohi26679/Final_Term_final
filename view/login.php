<?php
include '../Control/login_process.php';

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../cs/style.css">
        <title>Login</title>
    </head>
    <body>
        <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
           
            <label for="uname">Username:</label>
            <input type="text" id="uname" name="uname" ><br><br>

            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" ><br><br>

            <input type="submit" name="login" value="Login">
        </form>
        <p>If you don't have an account? 
<a href="register.php">Sign Up</a>
</p>
         <?php echo $errorMsg; ?>
    </body>
    </div>
</html>