<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
</body>
</html>