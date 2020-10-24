<?php
$table='t_free';

    include 'config.php';
    $update=false;
    $id="";
    $documento="";
    $nick="";
    $id_user="";
    $fecha="";
    $precio="";
    $diamantes="";


    if(isset($_POST['add'])){
        $documento=$_POST['documento'];
        $nick=$_POST['nick'];
        $id_user=$_POST['id_user'];
        $fecha=$_POST['fecha'];
        $precio=$_POST['precio'];
        $diamantes=$_POST['diamantes'];


        $query="INSERT INTO $table(documento,nick,id_user,fecha,precio,diamantes)VALUES(?,?,?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssss",$documento,$nick,$id_user,$fecha,$precio,$diamantes);
        $stmt->execute();


        header('location:index.php');
        // $_SESSION['response']="Se Añadio el Pedido a la Base de Datos";
        // $_SESSION['res_type']="success";
    }
     if(isset($_GET['delete'])){
         $id=$_GET['delete'];
         
        $sql="SELECT nick FROM $table WHERE id=?";
        $stmt2=$conn->prepare($sql);
        $stmt2->bind_param("i",$id);
        $stmt2->execute();
        $result2=$stmt2->get_result();
        $row=$result2->fetch_assoc();


         $query="DELETE FROM $table WHERE id=?";
         $stmt=$conn->prepare($query);
         $stmt->bind_param("i",$id);
         $stmt->execute();

         header('location:index.php');
        // $_SESSION['response']="Orden Eliminada";
        // $_SESSION['res_type']="danger";
     }
     if(isset($_GET['edit'])){
         $id=$_GET['edit'];
         $query="SELECT * FROM $table WHERE id=?";
         $stmt=$conn->prepare($query);
         $stmt->bind_param("i",$id);
         $stmt->execute();
         $result=$stmt->get_result();
         $row=$result->fetch_assoc();

         $id= $row['id'];
         $documento=$row['documento'];
         $nick=$row['nick'];
         $id_user=$row['id_user'];
         $fecha=$row['fecha'];
         $precio=$row['precio'];
         $diamantes=$row['diamantes'];

         $update=true;
     }
     if(isset($_POST['update'])){
         $id=$_POST['id'];
         $documento=$_POST['documento'];
         $nick=$_POST['nick'];
         $id_user=$_POST['id_user'];
         $fecha=$_POST['fecha'];
         $precio=$_POST['precio'];
         $diamantes=$_POST['diamantes'];

        $query="UPDATE $table SET documento=?,nick=?,id_user=?,fecha=?,precio=?,diamantes=? WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssssi",$documento,$nick,$id_user,$fecha,$precio,$diamantes,$id);
        $stmt->execute();

        $_SESSION['response']="Base de Datos Actualizada";
        $_SESSION['res_type']="primary";
        header('location:index.php');
     }
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
        $vfecha=$row['nick'];
        $vcode=$row['id_user'];
        $vprecio=$row['fecha'];
        $vcantidad=$row['diamantes'];

     }
?>