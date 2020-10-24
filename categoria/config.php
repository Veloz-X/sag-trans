<?php 

// $conn= new mysqli("localhost:3308","root","","bd-tarea");
$conn= new mysqli("localhost:3308","root","","trasns1_sag");

if($conn->connect_error){
    die("Cloud not connect to the database".$conn->connect_error);
}

mysqli_set_charset($conn,"utf8");


?>