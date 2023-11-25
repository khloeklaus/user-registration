<?php
    include "connect.php";

    $data = "SELECT * FROM registation";//request
    $results=mysqli_query($connect,$data);//response

    if(mysqli_num_rows($results)){
        while($user_registration = mysqli_fetch_assoc($result)){
            echo "First Name:" .$user_registration[first_name]
        }
    }
   
?>