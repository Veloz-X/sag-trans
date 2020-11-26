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
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
	<hr>
	<strong>Mi Orden</strong>
	<hr>
	';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
									<div class="row no-gutters align-items-center">
									
                                        <div class="col mr-4">
                                            <div class="text-xs font-weight text-dark mb-1">
												<strong>Doc.# </strong>'.$row["documento"].'</div>
											<div class="text-xs font-weight text-dark mb-1">
												<strong>Fecha: </strong>'.$row["fecha"].'</div>
											<div class="text-xs font-weight text-dark mb-1">
												<strong>ID: </strong>'.$row["id_user"].'</div>
											<div class="text-xs font-weight text-dark mb-1">
											<img src="https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png" width="20">  '.$row["nick"].'</div>
											<div class="text-xs font-weight text-dark mb-1">
												<strong>Diamantes: </strong>'.$row["diamantes"].' <img src="https://gametricksnohacks.digital/freefir/img/resource-2-img.png" width="15"></div>
											<div class="text-xs font-weight text-dark mb-1">
												<strong>Fecha: </strong>'.$row["fecha"].'</div>
												<div class="text-xs font-weight text-dark mb-1">
												<strong>Nota: </strong>'.$row["nota"].'</div>
										</div>
										
										<div class="col mr-4">
                                            <div class="text-xs font-weight text-dark mb-1">
											<span
											class="float-right "><span>Estado: &nbsp;</span><div class=" spinner-grow spinner-grow-sm text-'.$row["estado"].'" role="status">
												<span class="sr-only">Loading...</span>
											  </div></h4></span></div>
											<div class="text-xs font-weight text-dark mb-1">
											&nbsp;</div>
											<div class="text-xs font-weight text-dark mb-1">
											&nbsp;</div>
											<div class="text-xs font-weight text-dark mb-1">
											&nbsp;</div>
											<div class="text-xs font-weight text-dark mb-1">
											&nbsp;</div>
											<div class="text-xs font-weight text-dark mb-1">
											&nbsp;</div>
											<div class="text-xs font-weight text-dark mb-1">
											&nbsp;</div>
											<div class="text-xs font-weight text-dark mb-1">
											&nbsp;</div>
												<div class="float-right h5 mb-0 mr-3 font-weight-bold text-gray-800">
												$'.$row["precio"].'</div>
										</div>
										
										
										
                                    </div>
                                </div>
                            </div>
						</div>


                      
                </div>
		';
		
	}
	
	echo $output;
}
else
{
	echo '<br> Documento No existe - FreeFire.';
	
}


?>
