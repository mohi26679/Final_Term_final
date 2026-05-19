<?php
session_start();

session_start();
session_unset();

session_destroy();

header("Location: ../view/login.php");


$_SESSION = array();
if (isset($_COOKIE['user_login'])) {
    setcookie('user_login', '', time() - 3600, '/');
}
if(session_destroy()) {
    header("Location: ../view/login.php");
    exit();
}
?>
