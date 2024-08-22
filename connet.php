<<?php
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$college = $_POST['college'];
$state = $_POST['state'];
$city= $_POST['city'];

//Database connection
$conn = new mysqli('localhost','root','','studentdetails');
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
    else{
        $stmt = $conn->prepare("insert into registration(name,number,email,gender,college,state,city)values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sisssss",$name,$number,$email,$gender<$college,$state,$city);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>