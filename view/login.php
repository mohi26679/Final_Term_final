<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="../Control/AuthController.php" method="POST">

    <input type="email" name="email" ><br><br>

    <input type="password" name="password" ><br><br>

    <input type="checkbox" name="remember"> Remember Me<br><br>

    <input type="submit" name="login" value="Login">

</form>

<br>

<a href="register.php">Create New Account</a>

</body>
</html>