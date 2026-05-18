<?php
session_start();
?>

<nav>

<a href="../home/home.php">Home</a>

<a href="../profile.php">Profile</a>

<?php
if($_SESSION['role'] == 'admin'){
?>

<a href="#">Add Car</a>
<a href="#">Manage Users</a>

<?php
}
?>

<a href="../Control/AuthController.php?logout=true">Logout</a>

</nav>

<hr>