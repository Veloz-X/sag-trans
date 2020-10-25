<?php
include '../bd/config.php';
include '../a/action.php';
$id=$_GET['details'];
$query="SELECT * FROM $table WHERE id=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$vid=$row['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Hola mundo
  <h1>
    <?= $vid;  ?>
  </h1>
</body>
</html>