<?php
$table = 't_free';

include 'config.php';
$update = false;
$id = "";
$documento = "";
$nick = "";
$fecha = "";
$precio = "";
$diamantes = "";
$id_user = "";
$estado = "";


if (isset($_POST['add'])) {
    $documento = $_POST['documento'];
    $fecha = $_POST['fecha'];
    $diamantes = $_POST['diamantes'];
    $id_user = $_POST['id_user'];
    $nick = $_POST['nick'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];


    $query = "INSERT INTO $table(documento,fecha,diamantes,id_user,nick,precio,estado)VALUES(?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssss", $documento, $fecha, $diamantes, $id_user, $nick, $precio, $estado);
    $stmt->execute();


    header('location:../free.php');
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "SELECT fecha FROM $table WHERE id=?";
    $stmt2 = $conn->prepare($sql);
    $stmt2->bind_param("i", $id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row = $result2->fetch_assoc();


    $query = "DELETE FROM $table WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header('location:../free.php');
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM $table WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $id = $row['id'];
    $documento = $row['documento'];
    $fecha = $row['fecha'];
    $diamantes = $row['diamantes'];
    $id_user = $row['id_user'];
    $nick = $row['nick'];
    $precio = $row['precio'];
    $estado = $row['estado'];

    $update = true;
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $documento = $_POST['documento'];
    $fecha = $_POST['fecha'];
    $diamantes = $_POST['diamantes'];
    $id_user = $_POST['id_user'];
    $nick = $_POST['nick'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];


    $query = "UPDATE $table SET documento=?,fecha=?,diamantes=?,id_user=?,nick=?,precio=?,estado=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssi", $documento, $fecha, $diamantes, $id_user, $nick, $precio,$estado,$id);
    $stmt->execute();;
    header('location:../free.php');
}
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
    $vnick = $row['nick'];
    $vdiamantes = $row['diamantes'];
    $vid_user = $row['id_user'];
    $vprecio = $row['precio'];
    $vestado = $row['estado'];

}