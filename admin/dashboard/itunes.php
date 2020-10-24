<?php require_once "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->

<div class="container">
    <h1>Google Play</h1>



    <?php
    include_once 'bd/conexion.php';
    include 'google/action.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta = "SELECT id, documento, fecha, precio FROM t_google";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="accordion" id="accordionExample">
        <!-- AÑADIR -->
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Añadir
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <!-- PRODUCTO JUEGO  -->
                    <div class="row row-cols-2 row-cols-md-5 p-1">
                        <div class="col-md-4">
                            <h3 class="text-center text-info">Añadir</h3>
                            <form action="google/action.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <div class="form-group">
                                    <input type="text" name="documento" value="<?= $documento; ?>" class="form-control" placeholder="# Doc." required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fecha" value="<?= $fecha; ?>" class="form-control" placeholder="Fecha" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="c" value="<?= $c; ?>" class="form-control" placeholder="XXXXXXXXXXXXXXXX" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="precio" value="<?= $precio; ?>" class="form-control" placeholder="$$$" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="cantidad" value="<?= $cantidad; ?>" class="form-control" placeholder="Google Play Gift Card USD US " required>
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



                    </div>

                    <!-- FIN PRODUCTO  -->

                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:50%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Producto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $dat) {
                            ?>
                                <tr>
                                    <td><?php echo $dat['id'] ?></td>
                                    <td><strong>Doc. #: </strong>
                                        <?php echo $dat['documento'] ?><br><strong>Fecha: </strong>
                                        <?php echo $dat['fecha'] ?><br> <strong>Producto: </strong>
                                        <?php echo $dat['precio'] ?>
                                    </td>
                                    <td>
                                        <a href="google/details.php?details=<?php echo $dat['id'] ?>" class="badge badge-primary p-1">Details</a> |
                                        <a href="google/action.php?delete=<?php echo $dat['id'] ?>" class="badge badge-danger p-1" onclick="return confirm('Quieres Eliminar'); ">Delete</a> |
                                        <a href="google.php?edit=<?php echo $dat['id'] ?>" class="badge badge-success p-1">Edit</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- FIN del cont principal -->
<?php require_once "vistas/parte_inferior.php" ?>