<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <?php include "includes/head.html";?>
</head>
<body>
    <h1>CRUD APPLICATION<</h1>
    <div class="container">
        <table class="table table-hover-bordered table-striped">
            <thead>
            <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            </tr>


            </thead>
            <tbody>
                <?php
                    $qurey = "select * from 'registration'";
                    $result = mysqli_query($connect,$query);

                    if(!$connection){
                        die("connection failed" .mysqli_connect_error());
                    }
                    else{
                        echo "connection successful"; 
                    }
                ?>
                <tr>
                    <td>1</td>
                    <td>Nakiko</td>
                    <td>Aisha</td>
                    <td>Jinja</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kasozi</td>
                    <td>Keren</td>
                    <td>Buloba</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nakazibwe</td>
                    <td>Lynnet</td>
                    <td>Jinja</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Athago</td>
                    <td>Cowen</td>
                    <td>Seeta</td>
                </tr>


            </tbody>
        </table>

    </div>
    
</body>
</html>