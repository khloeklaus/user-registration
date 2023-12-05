<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "includes/head.html";?>
</head>
<body>
    <div class="container">
        <div class="row">
        <?php include 'includes/nav.php'; ?>
        <table class="table table-hover-bordered table-striped">
            <thead>
            <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Email</th>
                    <th>Addes</th>
                    <th>Telephone</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>  
            <?php
                require_once "includes/connect.php";
                $query = "SELECT * FROM registration";
                $result = mysqli_query($connection,$query);

                if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['first_name'] . "</td>";
                            echo "<td>" . $row['second_name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['addres'] . "</td>";
                            echo "<td>" . $row['telephone'] . "</td>";
                            echo "<td><img src = 'data:image/jpeg;basr64," . base64_encode($row['avatar'])"'width='50'height='50'alt='Avatar'></td>";
                            echo "<td>";
                                echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>';
                            
                                echo '<a href="includes/process_delete.php?id=' . $row['id'] . '">Delete</a>';
                            echo "</td>";
                            
                        echo "</tr>";

                    
                    }
                }
             ?>
        </tbody>
</table>
        </div>
    </div>
</body>
</html>

