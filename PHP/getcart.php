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
/* $id = $_SESSION['$uid']; */

// Prepare and execute a SQL query to check if the value is null
$sql = "SELECT `pname`, `image`, `id` FROM `products` WHERE price = 1000000";
$result = $conn->query($sql);


$response = array();

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        
           $response[] = array( "pname" => $row['pname'] , "image" => $row['image'] , "id" => $row['id']  );
            
          
            
        }
        
    } else {
        $response['error'] = 'ID not found';
    }
} else {
    $response['error'] = 'Query execution error';
}


echo json_encode($response);


$conn->close();


?>