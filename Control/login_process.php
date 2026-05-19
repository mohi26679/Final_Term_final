<?php
include '../Model/UserModel.php';
session_start();
$errorMsg="";
if(isset($_POST["login"])) {
$mydb = new UserModel();
$conn = $mydb->createConn();    
$result=$mydb->getUser($_REQUEST["uname"], $conn);

if($result->num_rows > 0){
    foreach($result as $row){
           $password=$row["password"];
          }
    
    $role=$row["role"];
}
if(password_verify($_REQUEST["pass"], $password)){
$_SESSION["uname"]=$_REQUEST["uname"];
$_SESSION["role"]=$role;
   if($role=="admin"){
    header("Location: ../view/admin_view.php");
}
else{
    header("Location: ../view/employee_view.php");
}  
    }
    else{
    $errorMsg= "Invalid username or password";
    }
}  


?>