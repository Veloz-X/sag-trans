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
				<strong>Doc. # </strong>'.$row["documento"].'
				<br>
				<strong>Fecha: </strong>'.$row["fecha"].'
				<br>
				<strong>Estado: </strong><a class="badge badge-success p-1 text-light">Pagado</a>
				<br>
				Google Play Gift Card <strong>'.$row["cantidad"].'</strong> USD US<img src="https://media.istockphoto.com/vectors/circle-flag-united-states-of-america-usa-flag-icon-vector-vector-id862664854?b=1&k=6&m=862664854&s=170x170&h=W_E5dhqpVzc5omi08b99O3JCfXKmbEbxY4jJIQi6YuE=" width="35">
				<br>
				<img src="https://seagm-media.seagmcdn.com/icon_400/225.jpg" width="20">: &nbsp;'.$row["c"].'
				<br>
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
	echo '<br> Documento No existe';
}

?>