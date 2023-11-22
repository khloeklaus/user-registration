<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <?php include "includes/head.html";?>
</head>
<body>
    <div class="container">
        <div class="row">
          <?php include 'includes/nav.php'; ?>
        </div>

    </div>
    <div class="container">
      <div class="row">
      <form action="" method="post">
      <div class="form-group">
        <input type="text"name="frist_name"placeholder="Frist Name" class="form control">
      </div>

      <div class="form-group">
        <input type="text"name="second_name"placeholder="Second Name" class="form control">
      </div>

      <div class="form-group">
        <input type="email"name="email"placeholder="Email" class="form control">
      </div> 

      <div class="form-group">
        <input type="address"name="address"placeholder="address" class="form control">
      </div> 

      <button type="submit" class="btn btn-success">Submit</button>

      </form>              
            </div> 
      </div>
    </div>
    
    
</body>
</html>