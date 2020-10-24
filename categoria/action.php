<?php
$table='tbl_customer';
    session_start();
    include 'config.php';
    $output='';
    $update=false;
    $id="";
    $iduser="";
    $nick="";
    $documento="";
    $fecha="";
    $detalle="";
    $precio="";




    if(isset($_POST['add'])){
        $iduser=$_POST['iduser'];
        // $nick=$_POST['nick'];
        // $documento=$_POST['documento'];
        // $fecha=$_POST['fecha'];
        // $detalle=$_POST['detalle'];
        // $precio=$_POST['precio'];

        $query="INSERT INTO $table(iduser)VALUES(?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssss",$iduser);
        $stmt->execute();

        header('location:freefire.php');
        $_SESSION['response']="Successfully inserted to the base the database";
        $_SESSION['res_type']="success";
    }
    //  if(isset($_GET['delete'])){
    //      $id=$_GET['delete'];
         
    //     $sql="SELECT photo FROM $table WHERE id=?";
    //     $stmt2=$conn->prepare($sql);
    //     $stmt2->bind_param("i",$id);
    //     $stmt2->execute();
    //     $result2=$stmt2->get_result();
    //     $row=$result2->fetch_assoc();

    //     $imagepath=$row['photo'];
    //     unlink($imagepath);

    //      $query="DELETE FROM $table WHERE id=?";
    //      $stmt=$conn->prepare($query);
    //      $stmt->bind_param("i",$id);
    //      $stmt->execute();

    //      header('location:adminpro.php');
    //     $_SESSION['response']="Eliminado en database";
    //     $_SESSION['res_type']="danger";
    //  }
    //  if(isset($_GET['edit'])){
    //      $id=$_GET['edit'];
    //      $query="SELECT * FROM $table WHERE id=?";
    //      $stmt=$conn->prepare($query);
    //      $stmt->bind_param("i",$id);
    //      $stmt->execute();
    //      $result=$stmt->get_result();
    //      $row=$result->fetch_assoc();

    //      $id= $row['id'];
    //      $name=$row['name'];
    //      $email=$row['email'];
    //      $phone=$row['phone'];
    //      $photo=$row['photo'];

    //      $update=true;
    //  }
    //  if(isset($_POST['update'])){
    //      $id=$_POST['id'];
    //      $name=$_POST['name'];
    //      $email=$_POST['email'];
    //      $phone=$_POST['phone'];
    //      $oldimage=$_POST['oldimage'];

         
    //      if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
    //         $newimage="uploads/".$_FILES['image']['name'];
    //         unlink($oldimage);
    //         move_uploaded_file($_FILES['image']['tmp_name'],$newimage);
    //      }else{
    //          $newimage=$oldimage;
    //      }
    //     $query="UPDATE $table SET name=?,email=?,phone=?,photo=? WHERE id=?";
    //     $stmt=$conn->prepare($query);
    //     $stmt->bind_param("ssssi",$name,$email,$phone,$newimage,$id);
    //     $stmt->execute();

    //     $_SESSION['response']="Update Successfylt";
    //     $_SESSION['res_type']="primary";
    //     header('location:adminpro.php');
    //  }
    //  if(isset($_GET['details'])){
    //     $id=$_GET['details'];
    //     $query="SELECT * FROM $table WHERE id=?";
    //     $stmt=$conn->prepare($query);
    //     $stmt->bind_param("i",$id);
    //     $stmt->execute();
    //     $result=$stmt->get_result();
    //     $row=$result->fetch_assoc();

    //     $vid=$row['id'];
    //     $vname=$row['name'];
    //     $vemail=$row['email'];
    //     $vphone=$row['phone'];
    //     $vphoto=$row['photo'];

    //  }
?>