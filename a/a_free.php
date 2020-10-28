<?php

include '../bd/config.php';
include '../a/action.php';


$table='t_free';
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
	echo '<br> Ingrese el # De Documento';
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
				<strong>Doc. # </strong>'.$row["documento"].'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<small class="text-muted">
				&nbsp; Activo &nbsp;
				<div class="spinner-grow spinner-grow-sm '.$row["estado"].'" role="status">
				  <span class="sr-only">Loading...</span>
				</div>
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
				<a href="">
				<input type="submit" name="details"  class="btn btn-primary btn-block" value="Próximamente"></td>
				</a>	
				</tr>


				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo '<br> Documento No existe - FreeFire.';
	
}


?>
