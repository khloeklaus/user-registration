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
      <?php include "includes/process_update.php";?>

      
      
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
    
    
</div>    
</body>
</html>