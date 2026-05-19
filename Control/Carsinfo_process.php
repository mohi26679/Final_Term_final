<?php
include '../Model/CarModel.php';

$hasError = false;
if(isset($_POST["AddCar_info"])) {
  if((empty($_REQUEST["name"]))) {
    $hasError=true;
    echo "Product Name is required<br>";
}
else{
    echo "Product Name: " . $_POST["name"] . "<br>";
}
if((empty($_REQUEST["price_per_day"]))) {
     $hasError=true;
 echo "Price is required";
}
else{
  echo "Price: " . $_POST["price_per_day"] . "<br>";
}
if(empty($_FILES["myfile"]["name"])){
    $hasError=true;
    echo "Image is required";
}
else{
    echo "Image: " . $_FILES["myfile"]["name"] . "<br>";
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/" . $_FILES["myfile"]["name"])){
        echo "Image uploaded successfully.<br>";
    } else {
        echo "Error uploading file.<br>";
    }
}


if($hasError==false){

$mydb2 = new MyDB2();
$conn2 = $mydb2->createConn();
$result=$mydb2->createProduct($_REQUEST["name"], $_REQUEST["model"], $_REQUEST["type"], $_REQUEST["price_per_day"], $_FILES["myfile"]["name"], $_REQUEST["description"], $conn2);
if($result===true){
     header("Location: ../view/uploadcarinfo.php");
}
else{
    echo "Error: " . $conn2->error;
}
$mydb2->closeConn($conn2);
}
}