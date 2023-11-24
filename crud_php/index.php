<?php 
require_once "connect.php";?>
<h2>All users</h2>
<button class="btn btn-primary"data-toggle="modal"data-target="#exampModal">Add users</button>
<div class="container">
        <table class="table table-hover-bordered table-striped">
            <thead>
            <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Addres</th>
                    <th>Telephone</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "select * from 'registration'";
                    $result =mysqli_query($connection,$query);

                    if(!$connection){
                        die("connection failed" .mysqli_connect_error());
                    }
                    else{
                        echo "connection successful"; 
                        while($row = mysqli_fetch_assoc($result)){ 
                        }
                    }
                ?>
                
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['second_name'];?></td>
                    <td><?php echo $row['addres'];?></td>
                    <td><?php echo $row['telephone'];?></td>
                    <td><a href="Adduser.php" class="btn btn-success"Update</a></td>
                    <td><a href="Userlist.php" class="btn btn-danger"Delete</a></td>
                </tr>
                

            </tbody>
        </table>

    </div>
    
</body>
</html>
