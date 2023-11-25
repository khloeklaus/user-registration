<?php
          if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            
              require_once "includes/connect.php";
             $query = "SELECT * FROM registration WHERE id = ?";
             $stmt = mysqli_prepare($connection,$query);
             mysqli_stmt_bind_param($stmt, "i", $id);
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             $data = mysqli_fetch_assoc($result);


            }
          
      ?>
      <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once "connect.php";
             
            $query = "UPDATE registration SET first_name = ?, second_name = ?, email = ?, addres = ?, telephone = ?";

            $stmt = mysqli_prepare($connection, $query);

            mysqli_stmt_bind_param($stmt, "sssssi", $fName, $sName,$email,$adders,$tel,$id);

            $id = $_POST['id'];
            $fName = $_POST['first_name'];
            $sName= $_POST['second_name'];
            $email = $_POST['email'];
            $adders = $_POST['addres'];
            $tel = $_POST['telephone'];
            mysqli_stmt_execute($stmt);
            //echo "Update was successful";
            header("Location:../display_users.php");
          
          }
      ?>
