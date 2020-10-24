<?php 
    include 'action.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
</head>

<body >

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-3  p-4 rounded">

            <div class="text-center">
            <img  src="https://www.storeandgamers.com/uploads/logo/logo_5ed1c11998a10.png" width="150"><br><hr>
                <img  src="https://s3.amazonaws.com/storeandgamers/uploads/images/img_x500_5edae4c726ba00-45093166-53745200.jpg"  width="250">
                <div class="input-group mb-3" >
  <div class="input-group-prepend">
    <span class="input-group-text">Codigo:</span>
  </div>
  <input id="myInput" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?= $vcode; ?>">
  <div class="input-group-append">
  <button onclick="myFunction()" class="btn btn-outline-secondary" type="button" id="btnCopy"><img src="https://www.materialui.co/materialIcons/content/content_copy_grey_192x192.png" width="16"></button>
    <!-- <span class="input-group-text"><img src="https://www.materialui.co/materialIcons/content/content_copy_grey_192x192.png" width="16"></span> -->
  </div>
</div>
<!-- TABLA -->
              <table class="table table-striped table-sm">
  <tbody>
    <tr >
      <th scope="row">Doc. #</th>
      <td><?= $vdocumento; ?></td>

    </tr>
    <tr>
      <th scope="row">Fecha:</th>
      <td><?= $vfecha; ?></td>
   

    </tr>
    <tr>
      <th scope="row">Estado:</th>
      <td><a class="badge badge-success p-1 text-light">Pagado</a></td>

    </tr>
    <tr>
      <th scope="row">Precio:</th>
      <td><?= $vprecio; ?></td>

    </tr>
    <tr>
      <th scope="row">Producto:</th>
      <td>Google Play Gift Card <strong><?= $vcantidad; ?> </strong>USD</td>

    </tr>
  <!-- REDES SOCIALES -->
  <tr >
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
      </td>
  </tr>

  
  </tbody>
</table>


<!-- DESCRIPCION -->
<hr>


    </div>
</div>
</body>
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Codigo Copiado: " + copyText.value);
} 
</script>
</html>