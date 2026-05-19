<?php
session_start();

if($_SESSION["role"]!="employee"){
    header("Location:../view/login.php");
}
?>