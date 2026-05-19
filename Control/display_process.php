<?php
// ১. একদম শুরুতে মডেল ইনক্লুড এবং ডেটাবেজ থেকে ডাটা নিয়ে আসার কাজ
include '../Model/CarModel.php';

$sql = "SELECT * FROM cars";
$mydb = new MyDB2();
$conn = $mydb->createConn();
$result = $conn->query($sql);


?>
<?php
// কাজ শেষ হওয়ার পর কানেকশন বন্ধ করা
$mydb->closeConn($conn);
?>