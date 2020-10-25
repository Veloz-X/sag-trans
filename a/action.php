<?php
include '../bd/config.php';
$table = 't_net';


$id = "";
$documento = "";
$fecha = "";



if(isset($_GET['details'])){
    $id=$_GET['details'];
    $query="SELECT * FROM $table WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $vid=$row['id'];
    $vdocumento=$row['documento'];
}