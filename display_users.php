<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "includes/head.html";?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
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
                include "includes/connect.php";
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
                            
                            echo "<td>";
                                echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '"><span class="fa fa-pencil"></span></a>';
                            
                                echo '<a href="includes/process_delete.php?id=' . $row['id'] . '"><span class="fa fa-trash"></span></a>';
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

