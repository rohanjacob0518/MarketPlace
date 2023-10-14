<?php
include 'Conn.php';
if (!$conn) 
{
  die();
} 
else 
{
  $memail = $_POST['memail'];
  $mpass = $_POST['mpass'];
  $sql = "SELECT * FROM merchants WHERE email='$memail'";
  $retval = mysqli_query($conn, $sql);
  if (!$retval) 
  {
    die();
  } 
  else 
  {
    $row = mysqli_fetch_array($retval);
    if ($row) 
    {
      if ($mpass == $row['password']) 
      {
        session_start();
        $_SESSION['mid']=$row['id'];
        echo $row['id'];
        header('location:ProductListSeller.php');
        //pass page 
      } 
      else 
      {
        echo "Invalid Credentials";
      }
    } 
    else 
    {
      echo "Invalid Credentials";
    }
  }
}
?>