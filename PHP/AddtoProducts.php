<?php
include 'Conn.php';
if(!$conn) 
{
  echo "Error";
  die($conn);
}
else 
{
  session_start();
  $merchid= $_POST['merchid'];
  $pname= $_POST['pname'];
  $image=$_POST['image'];
  $price=$_POST['price'];
  $sql = mysqli_query($conn,"INSERT INTO `products`(`pname`, `merchid`,`image`,`price`) VALUES ('$pname','$merchid','$image','$price')");
  if(!$sql) 
  {
    echo "ERROR";
  }
  else 
  {
    header('location:ProductListSeller.php');
  }
}
?>