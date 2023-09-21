<?php
          $conn = mysqli_connect("localhost", "root", "", "erdb");
          if (!$conn) 
          {
            die();
          } 
          else 
          {
            session_start();
            $uid= $_SESSION['uid'];
            $ulat = $_POST['clickedLatitude'];
            $ulong = $_POST['clickedLongitude'];
            $sql = mysqli_query($conn,"UPDATE Users SET `ulat`= '$ulat',`ulong`='$ulong' WHERE `id` = $uid");
            $retval = mysqli_query($conn, $sql);
            if(!$sql)
            {
              echo "Error";
            }

            //Give signup success page and failed page
          }
      ?>