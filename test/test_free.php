<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transferencia SAG</title>
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
<table class="table table bordered">
    <tr>

        <th>Mi Orden</th>

    </tr>

    <tr>


        <td>
            <font size=2>
                <strong>Doc. # </strong>'.$row["documento"].'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<small class="text-muted">
                    &nbsp; Pagado &nbsp;
                    <div class="spinner-grow spinner-grow-sm '.$row[" estado"].'" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </small>
                <br>
                <strong>Fecha: </strong>'.$row["fecha"].'
                <br>
                <strong>ID: </strong>'.$row["id_user"].'
                <br>
                <img src="https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png" width="20">&nbsp;'.$row["nick"].'
                <br>
                <strong>Pago: </strong>'.$row["precio"].'*
                <br>
                <strong>Diamantes: </strong>'.$row["diamantes"].'&nbsp;<img src="https://gametricksnohacks.digital/freefir/img/resource-2-img.png" width="20">
                <br>
                <strong>Nota: </strong>'.$row["nota"].'*

            </font>
        </td>
    <tr>

        <td colspan="2">
            <a href="">
                <input type="submit" name="details" class="btn btn-primary btn-block" value="Próximamente"></td>
        </a>
    </tr>



    </tr>
    <hr>
    <hr>
    <div class="row row-cols-1 row-cols-1 ">

            <!-- FREE FIRE -->
           <?php foreach ($recarga as $item) : ?>
              <!-- gg -->
              <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= $item['url'] ?>" class="text-decoration:none">
                  <div class="card border-left-success shadow h-100 py-1">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto shadow">
                          <img class="" style="border-radius: 8px; float:left;" width="72" height="72" src="<?= $item['icono'] ?>">
                        </div>
                        <h5>&nbsp; &nbsp;</h5>
                        <div class="col mr-2">

                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $item['title'] ?></div>
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Revisa tu Orden</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

          

          </div>
    
</body>
</html>