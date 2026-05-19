<?php
session_start();

if (!isset($_SESSION["role"]) && isset($_COOKIE["user_login"])) {
    $_SESSION["uname"] = $_COOKIE["user_login"];
    $_SESSION["role"] = "employee"; 
}

if($_SESSION["role"]!="employee"){
    header("Location:../view/login.php");
    exit();
}
?>