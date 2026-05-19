<?php
class UserModel {

    function createConn(){
$DBHOST = "localhost";
$DBUSER = "root";
$DBPASS = "";
$DBNAME = "online_car_rent";
$conn = new mysqli($DBHOST, $DBUSER, $DBPASS, $DBNAME);
return $conn;
    } 
    
    function createUser($name, $email, $password,$file,$role, $conn){
$sql="INSERT INTO users (name, email, password, file, role) VALUES ('$name', '$email', '$password', '$file', '$role')";
return $conn->query($sql);
}
function getUser($name, $conn){
$sql="SELECT * FROM users WHERE name='$name' ";
return $conn->query($sql);
}

function updateUser($name, $email, $password,$file,$role, $conn){
$sql="UPDATE users SET email='$email', password='$password', file='$file', role='$role' WHERE name='$name'";
return $conn->query($sql);
}
function searchCar($keyword,$conn){

$sql = "SELECT * FROM cars 
WHERE name LIKE '%$keyword%' 
OR model LIKE '%$keyword%'";

return $conn->query($sql);

}


function closeConn($conn){
$conn->close();
}


}

?>
