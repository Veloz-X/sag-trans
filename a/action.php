<?php
include '../bd/config.php';
$table = 't_net';

$update = false;
$id = "";
$documento = "";
$nick = "";
$fecha = "";
$precio = "";
$diamantes = "";
$id_user = "";
$estado = "";


if (isset($_GET['details'])) {
    $id = $_GET['details'];
    $query = "SELECT * FROM $table WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $vid = $row['id'];
    $vdocumento = $row['documento'];
    $vfecha = $row['fecha'];
    // $vnick = $row['nick'];
    // $vdiamantes = $row['diamantes'];
    // $vid_user = $row['id_user'];
    // $vprecio = $row['precio'];
    // $vestado = $row['estado'];

}