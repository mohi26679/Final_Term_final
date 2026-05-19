<?php
$result = false;
include '../Control/display_process.php';
?>
 
<html>
<head>
    
    <title>Admin Panel - View Products</title>
    <link rel="stylesheet" href="../cs/display.css">
</head>
<body>

<header class="display-header">
    <h2>Online Car Rent Admin Panel</h2>
</header>

<div class="display-container">
   
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="#">Dashboard</a>
        <a href="Addcars_info.php">Add Product</a>
        <a href="product_display.php">View Products</a>
        <a href="#">Users</a>
        <a href="../Control/logout_process.php">Logout</a>
    </div>

  
    <div class="main-content">
        <h1>Product Display</h1>
        
        <div class="table-container">
      
            <table border='1' cellpadding='10' cellspacing='0' class="car-display-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Type</th>
                        <th>Price per Day</th>
                        <th>Image</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["model"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["type"]) . "</td>";
                        echo "<td>$" . htmlspecialchars($row["price_per_day"]) . "</td>";
                        echo "<td><img src='../uploads/" . htmlspecialchars($row["image_path"]) . "' width='100'></td>";
                        echo "<td>" . htmlspecialchars($row["description"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' style='text-align:center;'>No cars found!</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<footer class="display-footer">
    <p>© 2026 Online Car Rent System | Admin Panel</p>
</footer>

</body>
</html>

