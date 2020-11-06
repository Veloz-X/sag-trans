<?php

include '../bd/config.php';
include '../a/action.php';


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
	echo '<br> Documento No existe - Netflix.';
	echo '<br> -
	';
	echo '<table class="table table-striped table-sm">
	<tbody>
	  <!-- REDES SOCIALES -->
	  <tr>
	  <td class="m_3731599029898677976content-block" style="text-align:center;width:100%" colspan="2">
	  
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color:#000000;">Horario de Servicio de Activación</span><br>
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">Lunes a Viernes</span><br>
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">Demora de 1 hora Hasta 12 Horas</span>
		  </td>
	  </tr>
	  <tr>
		<td class="m_3731599029898677976content-block" style="text-align:center;width:100%" colspan="2">
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color:#000000;">Estados de Netflix</span><br>
		  
		  <ul>

		  <li type="square"> <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">En espera para Activación  <div class="spinner-grow spinner-grow-sm" role="status">
		  <span class="sr-only">Loading...</span>
		</div></span></li>
		  
		  <li type="square"><span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">La Activación esta en proceso <div class="spinner-grow text-warning spinner-grow-sm" role="status">
		  <span class="sr-only">Loading...</span>
		</div></span></li>
		
		<li type="square"><span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">Cuenta Activada <div class="spinner-grow text-success spinner-grow-sm" role="status">
		<span class="sr-only">Loading...</span>
	  </div></span></li>

		  </ul>

		  </td>
	  </tr>


	</tbody>
  </table>
	';
	
}


?>
