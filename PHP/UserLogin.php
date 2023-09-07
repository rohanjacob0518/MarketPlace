<?php
          $conn = mysqli_connect("localhost", "root", "", "erdb");
          if (!$conn) 
          {
            die();
          } 
          else 
          {
            $uid = $_POST['uemail'];
            $upass = $_POST['upass'];
            $sql = "SELECT * FROM users WHERE email='$uid'";
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
                if ($upass == $row['password']) 
                {
                    session_start();
                    $_SESSION['uid']=$row['id'];
                    echo $row['id'];
                  header('location:ShopsListBuyer');
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