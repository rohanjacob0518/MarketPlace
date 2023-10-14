<?php
  include 'Conn.php';
  if (!$conn) 
  {
    die();
  } 
  else 
  {
    session_start();
    $ulat = $_POST['clickedLatitude'];
    $ulong = $_POST['clickedLongitude'];
    $uid= $_SESSION['uid'];
    $sql = mysqli_query($conn,"UPDATE Users SET `ulat`= '$ulat',`ulong`='$ulong' WHERE `id` = $uid");
    $retval = mysqli_query($conn, $sql);
    if(!$sql)
    {
      echo "Error";
    }
    //Give signup success page and failed page
  }
?>