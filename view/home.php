<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: ../login.php");
}

require_once '../Model/CarModel.php';

$car = new CarModel();

$featured = $car->featuredCars();

$categories = $car->getCategories();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<?php include '../navbar.php'; ?>

<h2>Featured Cars</h2>

<?php
while($row = $featured->fetch_assoc()){
?>

<div style="border:1px solid black;padding:10px;margin:10px;width:250px;display:inline-block;">

    <img src="../uploads/<?php echo $row['image']; ?>" width="200"><br>

    <h3><?php echo $row['name']; ?></h3>

    <p>Model: <?php echo $row['model']; ?></p>

    <p>Price: <?php echo $row['price_per_day']; ?></p>

</div>

<?php
}
?>


<h2>Categories</h2>

<?php
while($cat = $categories->fetch_assoc()){
?>

<a href="../cars.php?type=<?php echo $cat['type']; ?>">
    <?php echo $cat['type']; ?>
</a>

<br><br>

<?php
}
?>

</body>
</html>