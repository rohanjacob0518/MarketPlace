<?php
// Get the order data from the request body
$orderData = json_decode(file_get_contents('php://input'), true);

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert the order data into the orders table
$stmt = mysqli_prepare($conn, "INSERT INTO orders (name, quantity) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "si", $itemName, $quantity);

foreach ($orderData as $orderItem) {
  $itemName = $orderItem['name'];
  $quantity = $orderItem['quantity'];
  mysqli_stmt_execute($stmt);
	echo $itemName;
	echo $quantity;
}

// Close the database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

// Send a response indicating success or failure
http_response_code(200);
echo json_encode(array("message" => "Order saved successfully."));
?>