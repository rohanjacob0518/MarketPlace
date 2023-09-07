<?php
          $conn = mysqli_connect("localhost", "root", "", "erdb");
          if (!$conn) 
          {
            die();
          } 
          else 
          {
            $uemail = $_POST['uemail'];
            $upass = $_POST['upass'];
   
            $sql = mysqli_query($conn,"INSERT INTO Users (`email`,`password`) VALUES ('$uemail','$upass')");
            $retval = mysqli_query($conn, $sql);
            if(!$sql)
            {
              echo "Error";
            }

            //Give signup success page and failed page
          }
      ?>