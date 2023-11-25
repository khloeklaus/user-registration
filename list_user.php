<?php include "includes/head.html";?>

<table class="table table-hover-bordered table-striped">
            <thead>
            <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Addres</th>
                    <th>Telephone</th>
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
                            echo "<td>" . $row['first_name'] . "</td>";
                            echo "<td>" . $row['second_name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['addres'] . "</td>";
                            echo "<td>" . $row['telephone'] . "</td>";
                        echo "</tr>";

                    
                    }
                }
             ?>
        </tbody>
</table>



