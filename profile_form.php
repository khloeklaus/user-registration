<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Page</title>
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
        <form action="includes/process_profile.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text"name="name"placeholder="Name" class="form control">
          </div>

          <div class="form-group">
            <input type="number"name="telephone" placeholder="Telephone" class="form control">
          </div>

          <div class="form-group">
            <input type="file" name="avator"placeholder="Avator" class="form control">
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>              
      </div> 
      </div>
    </div>
    
    
    
</body>
</html>