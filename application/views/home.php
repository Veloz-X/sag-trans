<?php
$menu = array(
  array(
    'title' => 'Free Fire',
    'img' => 'https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png',
    'url' => base_url('/trans_free'),
  ),
  array(
    'title' => 'PUBG MOBILE',
    'img' => 'https://seagm-media.seagmcdn.com/icon_400/930.jpg',
    'url' => base_url('/demo'),
  ),
  array(
    'title' => 'Google Play Gift Card',
    'img' => 'https://seagm-media.seagmcdn.com/icon_400/225.jpg',
    'url' => base_url('/mante'),
  ),
  array(
    'title' => 'iTunes Gift Card',
    'img' => 'https://seagm-media.seagmcdn.com/icon_400/576.jpg',
    'url' => base_url('/mante'),
  ),
  array(
    'title' => 'PlayStation Network Card',
    'img' => 'https://seagm-media.seagmcdn.com/icon_400/189.jpg',
    'url' => base_url('/mante'),
  ),
);
$recarga = array(
  array(
    'title' => 'Free Fire',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/869.jpg',
    'icono'=>'https://seagm-media.seagmcdn.com/icon_400/869.jpg',
    'url' => base_url('/p/free.php'),
  ),
  array(
    'title' => 'PUBG Mobile',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/930.jpg',
    'icono'=>'https://seagm-media.seagmcdn.com/icon_400/756.jpg',
    'url' => base_url('/p/pubgm.php'),
  ),
  array(
    'title' => 'Mobile Legends',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/758.jpg',
    'icono'=>'https://seagm-media.seagmcdn.com/icon_400/758.jpg',
    'url' => base_url('/mante'),
  ),
);
$servicio = array(
  array(
    'title' => 'Netflix',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/595.jpg',
    'icono'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Netflix_icon.svg/1200px-Netflix_icon.svg.png',
    'url' => base_url('/p/net.php'),
  ),
  array(
    'title' => 'Amazon Prime',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/433.jpg',
    'icono'=>'https://lh3.googleusercontent.com/-Zgwtg4Ox6QCOKy6syNCWEnlI3uMw9C3ZUS-Fb_uicTh69xwExuSW9FC91A2kaWHoE6E=s180-rw',
    'url' => base_url('/mante'),
  )
);
$giftcard = array(
  array(
    'title' => 'Google Play',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/433.jpg',
    'icono'=>'https://seagm-media.seagmcdn.com/icon_400/225.jpg',
    'url' => base_url('/mante'),
  ),
  array(
    'title' => 'Itunes',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/433.jpg',
    'icono'=>'https://seagm-media.seagmcdn.com/icon_400/191.jpg',
    'url' => base_url('/mante'),
  ),
  array(
    'title' => 'PlayStation Network',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/433.jpg',
    'icono'=>'https://seagm-media.seagmcdn.com/icon_400/189.jpg',
    'url' => base_url('/mante'),
  ),
  array(
    'title' => 'Xbox Live',
    'img' => 'https://seagm-media.seagmcdn.com/special_deals/card/433.jpg',
    'icono'=>'https://seagm-media.seagmcdn.com/icon_400/194.jpg',
    'url' => base_url('/mante'),
  ),
);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transferencia SAG</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Brand -->
    <a href="index.php">
      <img class="p-1" src="https://www.storeandgamers.com/uploads/logo/logo_5ed1c11998a10.png" width="150">
    </a>


    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">


      <ul class="navbar-nav">
        <?php foreach ($menu as $item) : ?>
          <li class="nav-item">
            <a href="<?= $item['url'] ?>" class="nav-link">
              <img src="<?= $item['img'] ?>" width="20"> <?= $item['title'] ?>
            </a>
          </li>

        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
  <!-- FIN DE NAV  -->



  <!-- ANUNCIO -->


  <!-- FIN DE ANUNCIO -->

  <!-- INICIO DE PRUEBA -->
  <div class="accordion" id="accordionExample">
    <!-- JUEGO -->
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Recarga Directa
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <!-- PRODUCTO JUEGO  -->
          <div class="row row-cols-1 row-cols-1 ">

            <!-- FREE FIRE -->
            <?php foreach ($recarga as $item) : ?>
            <!-- gg -->
            <a href="<?= $item['url'] ?>" class="text-decoration:none">
              <div class=" col-sm-3">
                <div class="card text-left">
                  <img style="border-radius: 8px;" width="370" height="120" src="<?= $item['img'] ?>">
                  <div class="card-img-overlay ">
                  <img class="" style="border-radius: 8px; float:left;" width="72" height="72" src="<?= $item['icono'] ?>">
                    <h5 style=" float:left;  ">&nbsp;</h5><br>
                    <!-- <h5 style="float:left; color:#FFFFFF" class="card-title font-weight-bold ">&nbsp; Free Fire Diamantes</h5><br> -->
                    <h5 style="float:left; color:#FFFFFF" class="card-title font-weight-bold ">&nbsp; <?= $item['title'] ?></h5><br>
                    <h5 style="float:left; ">&nbsp;</h5>
                  </div>

                </div>
              </div>
            </a>

            <?php endforeach; ?>

            <hr>
            <!-- PUBG MOBILE -->




          </div>

          <!-- FIN PRODUCTO  -->

        </div>
      </div>
    </div>
    <!-- TARJETA DE REGALO  -->
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Gift Cards
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <!-- PRODUCTO -->
          <div class="row row-cols-1 row-cols-1">

          <?php foreach ($giftcard as $item) : ?>
            <!-- gg -->
            <a href="<?= $item['url'] ?>" class="text-decoration:none">
              <div class=" col-sm-3">
                <div class="card text-left">
                  <img style="border-radius: 8px;" width="370" height="120" src="<?= $item['img'] ?>">
                  <div class="card-img-overlay ">
                  <img class="" style="border-radius: 8px; float:left;" width="72" height="72" src="<?= $item['icono'] ?>">
                    <h5 style=" float:left;  ">&nbsp;</h5><br>
                    <!-- <h5 style="float:left; color:#FFFFFF" class="card-title font-weight-bold ">&nbsp; Free Fire Diamantes</h5><br> -->
                    <h5 style="float:left; color:#FFFFFF" class="card-title font-weight-bold ">&nbsp; <?= $item['title'] ?></h5><br>
                    <h5 style="float:left; ">&nbsp;</h5>
                  </div>

                </div>
              </div>
            </a>

            <?php endforeach; ?>

            <hr>

  


          </div>



        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingtree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="headingtree">
            Servicios
          </button>
        </h2>
      </div>
      <div id="collapseTree" class="collapse" aria-labelledby="headingtree" data-parent="#accordionExample">
        <div class="card-body">
          <!-- PRODUCTO -->

          
          <div class="row row-cols-1 row-cols-1">

<?php foreach ($servicio as $item) : ?>
  <!-- gg -->
  <a href="<?= $item['url'] ?>" class="text-decoration:none">
    <div class=" col-sm-3">
      <div class="card text-left">
        <img style="border-radius: 8px;" width="370" height="120" src="<?= $item['img'] ?>">
        <div class="card-img-overlay ">
        <img class="" style="border-radius: 8px; float:left;" width="72" height="72" src="<?= $item['icono'] ?>">
          <h5 style=" float:left;  ">&nbsp;</h5><br>
          <!-- <h5 style="float:left; color:#FFFFFF" class="card-title font-weight-bold ">&nbsp; Free Fire Diamantes</h5><br> -->
          <h5 style="float:left; color:#FFFFFF" class="card-title font-weight-bold ">&nbsp; <?= $item['title'] ?></h5><br>
          <h5 style="float:left; ">&nbsp;</h5>
        </div>

      </div>
    </div>
  </a>

  <?php endforeach; ?>

  <hr>




</div>


          </div>



        </div>



      </div>
    </div>
  </div>
  </div>
  <!-- FIN DE PERUEBA -->
  <hr>
  v0.37.b




  </div>
  </div>



</body>

</html>