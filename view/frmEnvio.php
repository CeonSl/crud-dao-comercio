<?php
$rutas = array();
$rutas = explode("/", ($_GET['cmd']));
?>

<body class="bg-dark">
  <div class="jumbotron bg-dark col-lg-6 col-md-6 col-sm-6 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Formulario de registro envíos</h1>
    <form <?php if (!isset($rutas[2])) { ?>action="<?php echo SERVERURL ?>registrar/envio" <?php } else { ?>action="<?php echo SERVERURL ?>editar/envio/<?= $rutas[2] ?>" <?php } ?>method="post">
      <fieldset style="width:300px ;">
        <legend>Datos</legend>
        <?php if (isset($rutas[2])) { ?>
          <div class="form-group">
            <label for="txtId">Id: </label>
            <input type="text" id="txtId" name="txtId" value="<?= $rutas[2] ?>" class="form-control" disabled>
          </div>

          <div class="form-group">
            <label for="txtFecha">Fecha: </label>
            <input type="date" id="txtFecha" name="txtFecha" value="<?= $rst->fecha ?>" class="form-control" placeholder="Ingrese Fecha">
          </div>

          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <input type="text" id="txtEstado" name="txtEstado" value="<?= $rst->estado ?>" class="form-control" placeholder="Ingrese Estado">
          </div>

        <?php
        } else {
        ?>
          <div class="form-group">
            <label for="txtFecha">Fecha: </label>
            <input type="date" id="txtFecha" name="txtFecha" value="" class="form-control" placeholder="Ingrese Fecha">
          </div>

          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <input type="text" id="txtEstado" name="txtEstado" value="" class="form-control" placeholder="Ingrese Estado">
          </div>

        <?php
        }
        ?>

        <div class="form-group">
          <?php
          if (!isset($rutas[2])) {
          ?>
            <input type="submit" value="Guardar" name="btnGuardar" id="btnGuardar" class="btn btn-primary">
          <?php
          } else {
          ?>
            <div class="form-group">
              <input type="submit" value="Actualizar" name="btnActualizar" id="btnActualizar" class="btn btn-info">

            <?php
          }
            ?>
            <input type="reset" value="Limpiar" class="btn btn-warning">
            </div>
            <a href="<?php echo SERVERURL ?>inicio/envio" class="btn btn-light">Listar Datos</a>
        </div>



      </fieldset>


    </form>
  </div>

</body>

</html>