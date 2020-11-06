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
	  <td  style="text-align:center;width:100%" >
		  <br>
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">Horario de Servicio de Activación</span><br>
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">Lunes a Viernes</span><br>
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">Duración: 1 hora Hasta 12 Horas</span>
		  </td>
	  </tr>
	  <tr>
		<td class="m_3731599029898677976content-block" style="text-align:center;width:100%" colspan="2">
		  <br>
		  <a href="https://www.facebook.com/StoreAndGamers/" style="color:transparent;margin-right:5px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/StoreAndGamers/&amp;source=gmail&amp;ust=1596475002202000&amp;usg=AFQjCNH0GLFST_dKlTqNy5rEESjsQ6PhvQ">
			<img src="https://ci3.googleusercontent.com/proxy/rP7eQG6dO1i7uuuLcP5NhNewC1yQJSU5gt1r1mFLKzfvVppilfGpLl2GwhOLGgPrGGLmzSlx0gldeWhicYmxcFzZIXJalhAsm3vJAnya9BAGnMT1rmU=s0-d-e1-ft#https://www.storeandgamers.com/assets/img/social-icons/facebook.png" alt="" style="width:28px;height:28px" class="CToWUd">
		  </a>
		  <a href="https://www.instagram.com/storeandgamers/" style="color:transparent;margin-right:5px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/storeandgamers/&amp;source=gmail&amp;ust=1596475002203000&amp;usg=AFQjCNHYnoXlWp_ZbjPVYlztejx07yLsJQ">
			<img src="https://ci6.googleusercontent.com/proxy/mj1RW4wHTKTt1qqvxr1zDJ1enlDaBoViMEmCC56_5v7Nwxt2Bc3osjFsWUVQ-X-RfLP98bg_x0BgyuVR2Lmf31EJ947h5o6u9k5H1r9ruJEzZJ5S-Xnm=s0-d-e1-ft#https://www.storeandgamers.com/assets/img/social-icons/instagram.png" alt="" style="width:28px;height:28px" class="CToWUd">
		  </a>
		  <a href="https://www.youtube.com/channel/UC2VKVJWFSb-JA7uq5A4WLcQ" style="color:transparent;margin-right:5px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.youtube.com/channel/UC2VKVJWFSb-JA7uq5A4WLcQ&amp;source=gmail&amp;ust=1596475002203000&amp;usg=AFQjCNFJQ4zNeFB-bWpLpOMKIoaHK9EZsg">
			<img src="https://ci3.googleusercontent.com/proxy/QY-AqKqRB2uqeKqQ6T6Bxrqqhhl5ryqdgd3mtvD_Yj1R9x9iXtThVZBM-qkyL87M1kqCzowY4U_rnKGnMyMuu7rE4N3OVyj6eiOvdLlWqYWDim5s6w=s0-d-e1-ft#https://www.storeandgamers.com/assets/img/social-icons/youtube.png" alt="" style="width:28px;height:28px" class="CToWUd">
		  </a><br>
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">Ecuador, Guayaquil</span><br>
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">© 2020 StoreAndGamers All Rights Reserved.</span><br>
		  <span style="font-family: Arial, Helvetica, sans-serif; font-size: small; color:#a3a3a3;">¿Tienes Algún Problema ? <a href="https://www.storeandgamers.com/contact-5">Contactanos</a></span>
			<br>
			v.1.5.b
		  </td>
	  </tr>


	</tbody>
  </table>
	';
	
}


?>
