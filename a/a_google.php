<?php
include '../bd/config.php';

$table='t_google';
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
							<th></th>
							<th>Mi Orden</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>

				<td  >
				<div align="center"><img src="https://seagm-media.seagmcdn.com/icon_400/225.jpg" width="80" ></div>

				</td>
				<td><font  size=2>
				<strong>Doc. # </strong>'.$row["documento"].'
				<br>
				<strong>Fecha: </strong>'.$row["fecha"].'
				<br>
				<strong>Estado: </strong><a class="badge badge-success p-1 text-light">Pagado</a>
				<br>
				Google Play Gift Card <strong>'.$row["cantidad"].'</strong> USD US
				</font>
				</td>
				<tr>

				<td colspan="2">
				<a href="../admin/dashboard/google/details.php?details='.$row["id"].'">
				<input type="submit" name="inicio"  class="btn btn-primary btn-block" value="Detalles"></td>
				</a>	
				</tr>


				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo '<br> Documento No existe';
}

?>