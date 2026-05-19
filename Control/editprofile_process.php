<?php
include '../model/UserModel.php';
session_start();

$mydb = new UserModel();
$conn = $mydb->createConn();
$result=$mydb->getUser($_SESSION["uname"], $conn);
if($result->num_rows > 0){
    foreach($result as $row){

           $email=$row["email"];
           $password=$row["password"];
           $file=$row["file"];
          }
}
if(isset($_POST["update"])) {
    $newEmail = $_REQUEST["myemail"];
    $newPassword = password_hash($_REQUEST["pass"], PASSWORD_DEFAULT);
    $newFile = $file;
    if(!empty($_FILES["myfile"]["name"])) {
        $newFile = basename($_FILES["myfile"]["name"]);
        if(!move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/" . $newFile)){
            echo "Error uploading file.<br>";
        }
    }

    $newName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : $_SESSION["uname"];
    $updateResult = $mydb->updateUser($_SESSION["uname"], $newName, $newEmail, $newPassword, $newFile, $conn);
    
    if($updateResult === true){
        header("Location: ../view/profile.php");
    } else {
        echo "Error: " . $conn->error;
    }
}





?>