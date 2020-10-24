<?php
include 'protector.php';
protect();
include 'action.php';

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

<body>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <!-- <hr>     -->
        <h3 class="text-center text-dark mt-2">Google Play</h3>
        <hr>
        <?php if (isset($_SESSION['response'])) { ?>
          <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= $_SESSION['response']; ?>
          </div>
        <?php }
        unset($_SESSION['response']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center text-info">Añadir</h3>
        <form action="action.php" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="documento" value="<?= $documento; ?>" class="form-control" placeholder="# Doc." required>
          </div>
          <div class="form-group">
            <input type="text" name="nick" value="<?= $nick; ?>" class="form-control" placeholder="Nick" required>
          </div>
          <div class="form-group">
            <input type="text" name="id_user" value="<?= $id_user; ?>" class="form-control" placeholder="ID" required>
          </div>
          <div class="form-group">
            <input type="text" name="fecha" value="<?= $fecha; ?>" class="form-control" placeholder="Fecha" required>
          </div>
          <div class="form-group">
            <input type="text" name="precio" value="<?= $precio; ?>" class="form-control" placeholder="Precio" required>
          </div>
          <div class="form-group">
            <input type="text" name="diamantes" value="<?= $diamantes; ?>" class="form-control" placeholder="Diamantes" required>
          </div>
          <div class="form-group">
            <?php if ($update == true) { ?>
              <input type="submit" name="update" class="btn btn-success btn-block" value="Actualizar">
            <?php } else { ?>
              <input type="submit" name="add" class="btn btn-primary btn-block" value="Añadir">
            <?php  } ?>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <?php
        $query = "SELECT * FROM t_free";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        ?>
        <h3 class="text-center text-info">Records Present In The database
        </h3>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Doc. #</th>
              <th>Nick</th>
              <th>Valor</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['documento']; ?></td>
                <td><?= $row['nick']; ?></td>
                <td> <?= $row['diamantes']; ?></td>
                <td>
                  <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-1">Details</a> |
                  <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-1" onclick="return confirm('Quieres Eliminar'); ">Delete</a> |
                  <a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-1">Edit</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>