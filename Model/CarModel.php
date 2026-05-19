<?php
class MyDB2 {

    function createConn(){
$DBHOST = "localhost";
$DBUSER = "root";
$DBPASS = "";
$DBNAME = "online_car_rent";
$conn = new mysqli($DBHOST, $DBUSER, $DBPASS, $DBNAME);
return $conn;
    } 
    
    function createProduct($name, $model, $type, $price_per_day, $image_path, $description, $conn){
$sql="INSERT INTO cars (name, model, type , price_per_day,image_path,description) VALUES ('$name', '$model', '$type', '$price_per_day', '$image_path', '$description')";
return $conn->query($sql);
}
function getProduct($name, $conn){
$sql="SELECT * FROM cars WHERE name='$name' ";
return $conn->query($sql);
}

function updateProduct($name, $price_per_day, $model, $type, $image_path, $description, $conn){
$sql="UPDATE cars SET price_per_day='$price_per_day', model='$model', type='$type', image_path='$image_path', description='$description' WHERE name='$name'";
return $conn->query($sql);
}


function closeConn($conn){
$conn->close();
}


}

?>