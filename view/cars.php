<?php

session_start();

require_once '../Model/CarModel.php';

$car = new CarModel();

$type = $_GET['type'];

$cars = $car->carsByCategory($type);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cars</title>
</head>
<body>

<?php include '../navbar.php'; ?>

<h2><?php echo $type; ?> Cars</h2>

<?php
while($row = $cars->fetch_assoc()){
?>

<div style="border:1px solid black;padding:10px;margin:10px;width:250px;display:inline-block;">

    <img src="../uploads/<?php echo $row['image']; ?>" width="200"><br>

    <h3><?php echo $row['name']; ?></h3>

    <p>Model: <?php echo $row['model']; ?></p>

    <p>Price Per Day: <?php echo $row['price_per_day']; ?></p>

    <button>View Details</button>

</div>

<?php
}
?>

</body>
</html>