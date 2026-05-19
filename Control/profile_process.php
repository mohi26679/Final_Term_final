<?php 
include '../model/UserModel.php';

session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../view/login.php");
} 

$mydb = new UserModel();
$conn = $mydb->createConn();
$result=$mydb->getUser($_SESSION["username"], $conn);
if($result->num_rows > 0){
    foreach($result as $row){
           $email=$row["email"];
           $file=$row["file"];
          }
}

if(isset($_GET["username"])) {
    $username = $_GET['username'];

    $mydb2 = new UserModel();
    $conn2 = $mydb2->createConn();
    $result2 = $mydb2->getUser($username, $conn2);
    if($result2->num_rows > 0){
        foreach($result2 as $row){
         echo json_encode($row);

        }
    } else {
        echo "No user found with the username: " . $username;
    }
    $mydb2->closeConn($conn2);
}
?>
