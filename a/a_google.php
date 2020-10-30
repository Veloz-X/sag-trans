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
				<form>
  <div class="form-group">
    <label for="formGroupExampleInput"><img src="https://seagm-media.seagmcdn.com/icon_400/225.jpg" width="20">&nbsp;Google Play Gift Card <strong>'.$row["cantidad"].'</strong> USD </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
  </div>
  
</form>
				
				
				<br>	

<div class="input-group input-group-sm mb-3">
<label for="formGroupExampleInput"><img src="https://seagm-media.seagmcdn.com/icon_400/225.jpg" width="20">&nbsp;Google Play Gift Card <strong>'.$row["cantidad"].'</strong> USD </label>
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm"><img src="https://cdn.icon-icons.com/icons2/1603/PNG/128/price-scan-scanner-bar-barcode-code_108573.png" width="20"></span>
  </div>
  <input type="text" value="'.$row["c"].'" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<hr>
				<strong>Nota: </strong>'.$row["nota"].'*
				</font>
				</td>
				


				
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