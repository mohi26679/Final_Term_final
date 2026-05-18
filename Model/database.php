<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "online_car_rent";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("Connection Failed");
}

?>