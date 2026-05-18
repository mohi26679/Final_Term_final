<?php

session_start();

require_once '../Model/UserModel.php';

$user = new UserModel();

if(!isset($_SESSION['user_id'])){
    header("Location: ../view/login.php");
}
if(isset($_POST['update'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $image = $_FILES['image']['name'];

    move_uploaded_file(
        $_FILES['image']['tmp_name'],
        '../uploads/'.$image
    );

    $data = [
        'name'=>$name,
        'email'=>$email,
        'address'=>$address,
        'phone'=>$phone,
        'profile_pic'=>$image
    ];

    $user->updateProfile($data,$_SESSION['user_id']);

    $_SESSION['success'] = "Profile Updated Successfully";

    header("Location: ../view/profile.php");
}

if(isset($_POST['change_password'])){

    $current = $_POST['current_password'];
    $new = $_POST['new_password'];

    $result = $user->getUserById($_SESSION['user_id']);

    if(password_verify($current,$result['password'])){

        $hashed = password_hash($new,PASSWORD_DEFAULT);

        $user->updatePassword($hashed,$_SESSION['user_id']);

        $_SESSION['success'] = "Password Changed";

    }else{
        $_SESSION['success'] = "Current Password Incorrect";
    }

    header("Location: ../view/profile.php");
}

?>