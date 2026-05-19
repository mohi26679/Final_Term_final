<?php
include '../control/Carsinfo_process.php';
?>

<!DOCTYPE html> 
<html>

<head>
    <link rel="stylesheet" href="../cs/admin.css">
</head>

<body>

<!-- HEADER -->
<header class="admin-header">
    <h2>Online Car Rent Admin Panel</h2>
</header>

<div class="admin-container">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2>Admin Panel</h2>

        <a href="#">Dashboard</a>
        <a href="Addcars_info.php">Add Product</a>
        <a href="#">View Products</a>
        <a href="#">Users</a>
        <a href="../control/logout_process.php">Logout</a>

    </div>

    <!-- MAIN CONTENT (IMPORTANT) -->
    <div class="main-content">

        <h1>Add Product</h1>

        <form action="" method="post" enctype="multipart/form-data">

            <label>Name:</label>
            <input type="text" name="name"><br><br>

            <label>Model:</label>
            <input type="text" name="model"><br><br>

            <label>Type:</label>
            <input type="text" name="type"><br><br>

            <label>Price per Day:</label>
            <input type="text" name="price_per_day"><br><br>

            <label>Upload File:</label>
            <input type="file" name="myfile"><br><br>

            <label>Description:</label>
            <textarea name="description"></textarea><br><br>

            <input type="submit" name="AddCar_info" value="AddCar_info">

        </form>

    </div>

</div>

<!-- FOOTER -->
<footer class="admin-footer">
    <p>© 2026 Online Car Rent System | Admin Panel</p>
</footer>

</body>
</html>