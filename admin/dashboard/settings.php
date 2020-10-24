<?php require_once "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->

<div class="container">
    <h1>Configuraciones</h1>



    <?php
    // include_once 'config/batabase.p';
    include '';

    ?>
    <form>
  <div class="form-group">
    <label >Servidor</label>
    <input type="text" class="form-control" >
    <small id="emailHelp" class="form-text text-muted">localhost:3308</small>
  </div>
  <div class="form-group">
    <label>Nombre de la base de datos</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Usuario</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Contraseña</label>
    <input type="text" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>


    
    



</div>
<!-- FIN del cont principal -->
<?php require_once "vistas/parte_inferior.php" ?>