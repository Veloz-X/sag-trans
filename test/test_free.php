<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Free Fire</title>
	<link rel="stylesheet" href="css/free.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="table-responsive">
<table class="table table bordered">
  <tr >

    <th>Mi Orden</th>

  </tr>
  <tr>


				<td><font  size=2>
				<strong>Doc. # </strong>'.$row["documento"].'<small class="text-muted">
			  </small>
				<br>
				<strong>Fecha: </strong>'.$row["fecha"].'
				<br>
				<strong>ID: </strong>'.$row["id_user"].'
				<br>
				<img src="https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png" width="20">&nbsp;'.$row["nick"].'
				<br>
				<strong>Pago: </strong>'.$row["precio"].'*
				<br>
				<strong>Diamantes: </strong>'.$row["diamantes"].'&nbsp;<img src="https://gametricksnohacks.digital/freefir/img/resource-2-img.png" width="20">
				<br>
				<strong>Nota: </strong>'.$row["nota"].'*

				</font>
				</td>
				<tr>
 
				<td colspan="2">
				
				</tr>


				
			</tr>
</body>
</html>