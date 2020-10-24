<?php
$table='t_google';

    include 'config.php';
    $update=false;
    $id="";
    $documento="";
    $fecha="";
    $c="";
    $precio="";
    $cantidad="";


    if(isset($_POST['add'])){
        $documento=$_POST['documento'];
        $fecha=$_POST['fecha'];
        $c=$_POST['c'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];


        $query="INSERT INTO $table(documento,fecha,c,precio,cantidad)VALUES(?,?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("sssss",$documento,$fecha,$c,$precio,$cantidad);
        $stmt->execute();


        header('location:index.php');
        $_SESSION['response']="Se Añadio el Pedido a la Base de Datos";
        $_SESSION['res_type']="success";
    }
     if(isset($_GET['delete'])){
         $id=$_GET['delete'];
         
        $sql="SELECT fecha FROM $table WHERE id=?";
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
        $_SESSION['response']="Orden Eliminada";
        $_SESSION['res_type']="danger";
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
         $fecha=$row['fecha'];
         $c=$row['c'];
         $precio=$row['precio'];
         $cantidad=$row['cantidad'];

         $update=true;
     }
     if(isset($_POST['update'])){
         $id=$_POST['id'];
         $documento=$_POST['documento'];
         $fecha=$_POST['fecha'];
         $c=$_POST['c'];
         $precio=$_POST['precio'];
         $cantidad=$_POST['cantidad'];

        $query="UPDATE $table SET documento=?,fecha=?,c=?,precio=?,cantidad=? WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("sssssi",$documento,$fecha,$c,$precio,$cantidad,$id);
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
        $vfecha=$row['fecha'];
        $vcode=$row['c'];
        $vprecio=$row['precio'];
        $vcantidad=$row['cantidad'];

     }
?>