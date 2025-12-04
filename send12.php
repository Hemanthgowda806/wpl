<?php

$conn = new mysqli("localhost", "root", " ", "demo");

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];

$sql = "INSERT INTO users(name,address,email) VALUES('$name','$address','$email')";

if ($conn->query($sql)) {
    header("Location: ./12.php");
    exit();
} else {
    echo "Failed to insert data";
}

$conn->close();

?>