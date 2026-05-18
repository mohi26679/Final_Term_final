<?php

session_start();

include '../Model/UserModel.php';

$user = new UserModel();

$data = $user->getUserById($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<?php include '../navbar.php'; ?>

<?php
if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
?>

<h2>Profile</h2>

<img src="../uploads/<?php echo $data['profile_pic']; ?>" width="100"><br><br>

<form action="../Control/ProfileController.php" method="POST" enctype="multipart/form-data">

    <input type="text" name="name" value="<?php echo $data['name']; ?>"><br><br>

    <input type="email" name="email" value="<?php echo $data['email']; ?>"><br><br>

    <textarea name="address"><?php echo $data['address']; ?></textarea><br><br>

    <input type="text" name="phone" value="<?php echo $data['phone']; ?>"><br><br>

    <input type="file" name="image"><br><br>

    <input type="submit" name="update" value="Update Profile">

</form>

<hr>

<h2>Change Password</h2>

<form action="../Control/ProfileController.php" method="POST">

    <input type="password" name="current_password" ><br><br>

    <input type="password" name="new_password" ><br><br>

    <input type="submit" name="change_password" value="Change Password">

</form>

</body>
</html>