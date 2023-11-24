<?php include 'connect.php';?>
    
    if(isset($_POST['add_user'])){

        $firstname = $_POST['first_name'];
        $secondname = $_POST['second_name'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone']

        if($fname == "" empty($fname)){
            header('location:index.php?message=You need to fill in the first name!');
        }
        else{
            $qurey = "insert into'registration'()"
        }
    }
?>