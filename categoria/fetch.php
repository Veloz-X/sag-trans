<?php
include 'config.php';

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_customer 
	WHERE iduser LIKE '%".$search."%'
	OR nick LIKE '%".$search."%' 
	OR documento LIKE '%".$search."%' 
	OR fecha LIKE '%".$search."%' 
	OR detalle LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tbl_customer ORDER BY id DESC";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Mi Orden</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>
				<div class="bg-light p-2 contenedor">
				<div>
				
				<strong>ID: </strong>'.$row["iduser"].'&nbsp;&nbsp; &nbsp; &nbsp;

				<a class="badge badge-success p-1 text-light">Pagado</a>

				<br>
				<strong><img src="https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png" width="20"> </strong>'.$row["nick"].'
				<hr>
				</div>
				<input type="submit" name="inicio"  class="btn btn-primary btn-block" value="Detalles">
				</div>
				</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo '<br> No existe';
}
?>