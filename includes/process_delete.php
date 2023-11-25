
      <?php
      require_once "connect.php";
          if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
             $query = "DELETE FROM registration WHERE id = ?";
             $stmt = mysqli_prepare($connection,$query);
             mysqli_stmt_bind_param($stmt, "i", $id);
             mysqli_stmt_execute($stmt);
             mysqli_stmt_close($stmt);
             mysqli_close($connection);
             header("Location:../display_users.php");



            }
          
      ?>
