<?php
// Include your database connection code here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Create a connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the AJAX request
session_start();
$id = $_SESSION['uid'];

// Prepare and execute a SQL query to check if the value is null
$sql = "SELECT `cart` FROM `users` WHERE id = $id";
$sql2 = "UPDATE `users` SET `cart`=$id WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $value = $row['cart'];
    if ($value !== null) {
        echo 'true';
        
    } else {
        $res2= $conn->query($sql2);
        echo 'false';
    }
} else {
    echo 'false'; // ID not found
}

$conn->close();
?>