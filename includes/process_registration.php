<?php
    require_once "connect.php";

    $query ="INSERT INTO registration(first_name,second_name,email,addres,telephone)VALUES(?,?,?,?,?)";
    $stmt = mysqli_prepare($connection,$query);
    if (!$stmt){
        die("Prepare failed:" . mysqli_error($connection));
    }

    mysqli_stmt_bind_param($stmt, "sssss", $fName,$sName,$email,$addres,$tel);
    $fName = $_POST["first_name"];
    $sName = $_POST["second_name"];
    $email = $_POST["email"];
    $addres = $_POST["addres"];
    $tel = $_POST["telephone"];
    if (mysqli_stmt_execute($stmt)){
        //header("Location: ../display data.php?success=true");
        echo "Data inserted successfully.";
    } else {
        die("Execute failed:" . mysqli_error($connection));
    } 
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
    ?>
    

?>