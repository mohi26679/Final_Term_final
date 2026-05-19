<?php
session_start();
session_unset();

session_destroy();

header("Location: ../view/login.php");


if(session_destroy()) {
    header("Location: ../view/login.php");
}
 
?>
