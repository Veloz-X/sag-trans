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
          <div class="row row-cols-2 row-cols-md-5 p-1">

            <!-- FREE FIRE -->
            <a href="p/free.php" class="text-decoration-none">
              <div class="col mb-4">
                <div class="card">
                  <img src="https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png" class="card-img-top p-2" width="50%">
                  <h5 class="card-title font-weight-bold text-center p-1">Free Fire</h5>
                  <div class="card-footer ">
                    <small class="text-muted">
                      <div class="spinner-grow spinner-grow-sm text-success" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>&nbsp; &nbsp;Activo
                    </small>
                  </div>
                </div>
              </div>
            </a>
            <!-- PUBG MOBILE -->
            <div class="col mb-4">
              <div class="card">
                <img src="https://seagm-media.seagmcdn.com/icon_400/930.jpg" class="card-img-top p-2" width="50%">
                <h5 class="card-title font-weight-bold text-center p-1">PUBG M</h5>
                <div class="card-footer ">
                  <small class="text-muted">
                    <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>&nbsp; Desactivado
                  </small>
                </div>
              </div>
            </div>



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
          <div class="row row-cols-2 row-cols-md-5 p-1">

            <!-- GOOGLE PLAY -->
            <a href="p/googleplay.php" class="text-decoration-none">
              <div class="col mb-4">
                <div class="card">
                  <img src="https://seagm-media.seagmcdn.com/icon_400/225.jpg" class="card-img-top p-2" width="50%">
                  <h5 class="card-title font-weight-bold text-center p-1">Google Play</h5>
                  <div class="card-footer ">
                    <small class="text-muted">
                      <div class="spinner-grow spinner-grow-sm text-success" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>&nbsp; &nbsp;Activo
                    </small>
                  </div>
                </div>
              </div>
            </a>

            <!-- ITUNES -->
            <div class="col mb-4">
              <div class="card">
                <img src="https://seagm-media.seagmcdn.com/icon_400/622.jpg" class="card-img-top p-2" width="50%">
                <h5 class="card-title font-weight-bold text-center p-1">iTunes</h5>
                <div class="card-footer ">
                  <small class="text-muted">
                    <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>&nbsp; Desactivado
                  </small>
                </div>
              </div>
            </div>
            <!-- PSN -->
            <div class="col mb-4">
              <div class="card">
                <img src="https://seagm-media.seagmcdn.com/icon_400/189.jpg" class="card-img-top p-2" width="50%">
                <h5 class="card-title font-weight-bold text-center p-1">PlayStation Network </h5>
                <div class="card-footer ">
                  <small class="text-muted">
                    <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>&nbsp; Desactivado
                  </small>
                </div>
              </div>
            </div>
            <!-- XBOX -->
            <div class="col mb-4">
              <div class="card">
                <img src="https://seagm-media.seagmcdn.com/icon_400/194.jpg" class="card-img-top p-2" width="50%">
                <h5 class="card-title font-weight-bold text-center p-1">Xbox Live</h5>
                <div class="card-footer ">
                  <small class="text-muted">
                    <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>&nbsp; Desactivado
                  </small>
                </div>
              </div>
            </div>



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
          <div class="row row-cols-1 row-cols-md-5 p-1">
            <!-- INICIO ACTUALIZACION V2 -->
            <div class="card text-white p-2">
              <img src="https://seagm-media.seagmcdn.com/special_deals/card/595.jpg" class="card-img " width="314px" height="120px">
              <div class="card-img-overlay ">
                <div class="row row-cols-2">
                  <div class="card-img ">
                    <img src="https://elrincondenetflix.com/wp-content/uploads/2020/04/nuevo-logo-netflix_original.jpg" width="72px" height="72px">
                  </div>
                  <div>
                    <h5 class="card-title">Netflix Cuentas</h5>
                  </div>

                </div>


              </div>
            </div>
            <!-- FIN ACTUALIZACION V2 -->
            <!-- NETFLIX-->
            <a href="p/net.php" class="text-decoration-none">
              <div class="col mb-4">
                <div class="card">
                  <img src="https://elrincondenetflix.com/wp-content/uploads/2020/04/nuevo-logo-netflix_original.jpg" class="card-img-top p-2" width="50%">
                  <h5 class="card-title font-weight-bold text-center p-1">Netflix</h5>
                  <div class="card-footer ">
                    <small class="text-muted">
                      <div class="spinner-grow spinner-grow-sm text-success" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>&nbsp; &nbsp;Activo
                    </small>
                  </div>
                </div>
              </div>
            </a>

            <!-- ITUNES -->
            <div class="col mb-4">
              <div class="card">
                <img src="https://seagm-media.seagmcdn.com/icon_400/622.jpg" class="card-img-top p-2" width="50%">
                <h5 class="card-title font-weight-bold text-center p-1">iTunes</h5>
                <div class="card-footer ">
                  <small class="text-muted">
                    <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>&nbsp; Desactivado
                  </small>
                </div>
              </div>
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