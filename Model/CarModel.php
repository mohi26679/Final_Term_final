<?php
include '../Model/database.php';

class CarModel {

    public function featuredCars(){
        global $conn;

        $sql = "SELECT * FROM cars WHERE featured=1 LIMIT 6";

        $result = $conn->query($sql);

        return $result;
    }

    public function getCategories(){
        global $conn;

        $sql = "SELECT DISTINCT type FROM cars";

        return $conn->query($sql);
    }

    public function carsByCategory($type){
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM cars WHERE type=?");

        $stmt->bind_param("s",$type);

        $stmt->execute();

        return $stmt->get_result();
    }
}

?>