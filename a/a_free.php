<?php
$u_bd=base_url('../bd/config.php');
include '$u_bd';

var_dump($u_bd);

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
				<strong>Doc. # </strong>'.$row["documento"].'
				<br>
				<strong>Fecha: </strong>'.$row["fecha"].'
				<br>
				<img src="https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png" width="20">&nbsp;'.$row["nick"].'
				<br>
				<strong>Diamantes: </strong>'.$row["diamantes"].'*
				</font>
				</td>
				<tr>

				<td colspan="2">
				<a href="../admin/dashboard/free/details.php?details='.$row["id"].'">
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