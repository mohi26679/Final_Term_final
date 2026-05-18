<?php
session_start();

require_once '../Model/UserModel.php';

$user = new UserModel();

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];

    if(strlen($password) < 8){
        die("Password must be 8 characters");
    }

    $check = $user->getUserByEmail($email);

    if($check){
        die("Email Already Exists");
    }

    $hashed = password_hash($password,PASSWORD_DEFAULT);

    $data = [
        'name'=>$name,
        'email'=>$email,
        'password'=>$hashed,
        'address'=>$address,
        'phone'=>$phone,
        'role'=>$role
    ];

    $user->createUser($data);

    header("Location: ../view/login.php");
}

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $user->getUserByEmail($email);

    if($result && password_verify($password,$result['password'])){

        $_SESSION['user_id'] = $result['id'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['role'] = $result['role'];

        if(isset($_POST['remember'])){

            $token = bin2hex(random_bytes(32));

            $user->updateRememberToken($token,$result['id']);

            setcookie(
                'remember_token',
                $token,
                time() + (86400 * 30),
                '/'
            );
        }

        header("Location: ../view/home/home.php");

    }else{
        echo "Invalid Email or Password";
    }
}

if(isset($_GET['logout'])){

    session_destroy();

    setcookie("remember_token","",time()-3600,"/");

    header("Location: ../view/login.php");
}

?>