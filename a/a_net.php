<?php

include '../bd/config.php';

$table='t_net';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM $table
	WHERE documento LIKE '".$search."'
	";
}
else
{
	$query = "
	SELECT * FROM $table WHERE `id` = 2 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr >

							<th>Mi Orden</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>


				<td><font  size=2>
				<strong>Doc. # </strong>'.$row["documento"].'&nbsp; &nbsp; &nbsp;<strong>Estado: </strong>'.$row["estado"].'<small class="text-muted">
				<div class="spinner-grow spinner-grow-sm text-success" role="status">
				  <span class="sr-only">Loading...</span>
				</div>&nbsp; &nbsp;Activo
			  </small>
				<br>
				<strong>Fecha: </strong>'.$row["fecha"].'
				<br>
				<strong>Tipo: </strong>'.$row["tipo"].'*
				<br>
				<img src="https://elrincondenetflix.com/wp-content/uploads/2020/04/nuevo-logo-netflix_original.jpg" width="20">&nbsp;'.$row["correo"].'
				<br>
				<strong>Contraseña: </strong>'.$row["contra"].'*
				<br>
				<strong>Nota: </strong>'.$row["nota"].'*

				</font>
				</td>
				<tr>

				<td colspan="2">
				<a href="/mante='.$row["id"].'">
				<input type="submit" name="inicio"  class="btn btn-primary btn-block" value="null"></td>
				</a>	
				</tr>


				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo '<br> Documento No existe - Netflix - SAG';
}

?>