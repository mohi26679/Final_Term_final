!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Registration</h2>
<form action="../Control/AuthController.php" method="POST" onsubmit="return validateRegister()">
<label for="name">Name:</label><br>
    <input type="text" name="name" ><br><br>
<label for="email">Email:</label><br>
    <input type="email" name="email" ><br><br>
<label for="password">Password:</label><br>
    <input type="password" name="password" id="password" ><br><br>
<label for="address">Address:</label><br>
    <textarea name="address" ></textarea><br><br>
<label for="phone">Phone:</label><br>
    <input type="text" name="phone" ><br><br>

    <select name="role">
        <option value="member">Member</option>
        <option value="admin">Admin</option>
    </select><br><br>

    <input type="submit" name="register" value="Register">

</form>

<br>

<a href="login.php">Already Have Account? Login</a>

<script src="../js/validation.js"></script>

</body>
</html>