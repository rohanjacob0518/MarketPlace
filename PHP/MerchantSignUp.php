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
  session_start();
  $_SESSION['memail']=$memail;

  $sql = mysqli_query($conn,"INSERT INTO merchants (`email`,`password`) VALUES ('$memail','$mpass')");
  $retval = mysqli_query($conn, $sql);
  if($sql)
  {
    echo '<script>alert("SignUp Sucessful Press ok to continue login")</script>';
    
    header('location:merchant.html');
  }
  else
  {
    echo "Error";
  }
  //Give signup success page and failed page
}
?>