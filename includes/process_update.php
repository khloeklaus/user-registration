<?php
require_once "connect.php";

          if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            
              
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
            
            $query = "UPDATE registration SET first_name = ?, second_name = ?, email = ?, addres = ?, telephone = ? WHERE id =?";

            $stmt = mysqli_prepare($connection, $query);

            mysqli_stmt_bind_param($stmt, "sssssi", $fName, $sName,$email,$addres,$tel,$id);

            $fName = $_POST['first_name'];
            $sName= $_POST['second_name'];
            $email = $_POST['email'];
            $addres = $_POST['addres'];
            $tel = $_POST['telephone'];
           
            if(mysqli_stmt_execute($stmt)){
              header("Location:../display_users.php");
            }
            else
            {
              die('failed' .mysqli_error($connection));
            }
            //echo "Update was successful";
            
          
          }
      ?>
