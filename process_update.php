<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating</title>
    <?php include "includes/head.html";?>
    <h1>Update users</h1>
</head>
<body>
<div class="container">
      <div class="row">
      <?php include 'includes/nav.php'; ?>
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
            echo "Update was successful";
          
          }
      ?>

        <form action="includes/process_registration.php" method="post">

        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
          </div>

          <div class="form-group">
            <input type="text" name="first_name"placeholder="First Name" value="<?php echo $data['first_name'];?>">
          </div>

          <div class="form-group">
            <input type="text"name="second_name"placeholder="Second Name" value="<?php echo $data['second_name'];?>">
          </div>

          <div class="form-group">
            <input type="text"name="email" placeholder="Email" value="<?php echo $data['email'];?>">
          </div> 

          <div class="form-group">
            <input type="text"name="addres"placeholder="Addres" value="<?php echo $data['addres'];?>">
          </div> 

          <div class="form-group">
            <input type="number"name="telephone"placeholder="Telephone" value="<?php echo $data['telephone'];?>">
          </div>

          <button type="submit" class="btn btn-success">Update</button>
        </form>              
      </div> 
      </div>
    </div>
    
    
    
</body>
</html>