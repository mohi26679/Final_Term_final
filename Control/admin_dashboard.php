<?php
session_start();

if($_SESSION["role"]!="admin"){
    header("Location:../view/login.php");
}
?>