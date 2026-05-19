<?php 
include '../Control/profile_process.php';

?>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h2>Profile</h2>
        <p>Welcome to your profile!</p>
        <p>Hello, <?php echo $_SESSION["username"]; ?>!</p>
Email: <?php echo isset($email) ? $email : ''; ?>
<br>



<img src="../uploads/<?php echo isset($file) ? $file : 'default.jpg'; ?>" alt="Profile Image" width="200" height="200">
<a href="../view/editprofile.php">Edit Profile</a>

<hr/>

<input type="text" name="username" id="username" onkeyup="getUserData()" >

<p id="result"> </p>




<hr/>



        <a href="../Control/logout_process.php">Logout</a>

<script src="../js/validation.js"></script>
    </body>
</html>