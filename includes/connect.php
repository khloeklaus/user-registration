<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","User_registration");
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if(!$connection){
    die("connection failed" .mysqli_connect_error());
}
else{
    echo "connection successful"; 
}
?>