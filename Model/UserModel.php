<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "online_car_rent";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("Connection Failed");
}

class UserModel {

    public function createUser($data){
        global $conn;

        $stmt = $conn->prepare("INSERT INTO users(name,email,password,address,phone,role) VALUES(?,?,?,?,?,?)");

        $stmt->bind_param(
            "ssssss",
            $data['name'],
            $data['email'],
            $data['password'],
            $data['address'],
            $data['phone'],
            $data['role']
        );
   return $stmt->execute();

        $stmt->bind_param("s",$email);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }
    public function getUserByEmail($email){
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");

        $stmt->bind_param("s",$email);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function getUserById($id){
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");

        $stmt->bind_param("i",$id);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function updateRememberToken($token,$id){
        global $conn;

        $stmt = $conn->prepare("UPDATE users SET remember_token=? WHERE id=?");

        $stmt->bind_param("si",$token,$id);

        return $stmt->execute();
    }

    public function getUserByToken($token){
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM users WHERE remember_token=?");

        $stmt->bind_param("s",$token);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function updateProfile($data,$id){
        global $conn;

        $stmt = $conn->prepare("UPDATE users SET name=?,email=?,address=?,phone=?,profile_pic=? WHERE id=?");

        $stmt->bind_param(
            "sssssi",
            $data['name'],
            $data['email'],
            $data['address'],
            $data['phone'],
            $data['profile_pic'],
            $id
        );

        return $stmt->execute();
    }
    public function updatePassword($password,$id){
        global $conn;

        $stmt = $conn->prepare("UPDATE users SET password=? WHERE id=?");

        $stmt->bind_param("si",$password,$id);

        return $stmt->execute();
    }
}

?>