<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de registro nivel de parámetro</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<?php
$rutas = array();
$rutas = explode("/", ($_GET['cmd']));
?>


<body class="bg-dark">
  <div class="jumbotron bg-dark col-lg-6 col-md-6 col-sm-6 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Formulario de registro de nivel de parámetro</h1>
    <form <?php if (!isset($rutas[2])) { ?>action="<?php echo SERVERURL ?>registrar/nParametro" <?php } else { ?>action="<?php echo SERVERURL ?>editar/nParametro/<?= $rutas[2] ?>" <?php } ?>method="post">
      <fieldset style="width:300px ;">
        <legend>Datos Generales</legend>
        <?php if (isset($rutas[2])) { ?>
          <div class="form-group">
            <label for="txtId">Id: </label>
            <input type="text" id="txtId" name="txtId" value="<?= $rutas[2] ?>" class="form-control" disabled>
          </div>

          <div class="form-group">
            <label for="txtDescripcion">Descripción: </label>
            <input type="text" id="txtDescripcion" name="txtDescripcion" value="<?= $rst->descripcion ?>" class="form-control" placeholder="Ingrese Descripción">
          </div>

          <div class="form-group">
            <label for="txtTipo">Tipo: </label>
            <input type="text" id="txtTipo" name="txtTipo" value="<?= $rst->tipo ?>" class="form-control" placeholder="Ingrese Tipo">
          </div>

          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <input type="text" id="txtEstado" name="txtEstado" value="<?= $rst->estado ?>" class="form-control" placeholder="Ingrese Estado">
          </div>

        <?php
        } else {
        ?>
          <div class="form-group">
            <label for="txtDescripcion">Descripción: </label>
            <input type="text" id="txtDescripcion" name="txtDescripcion" value="" class="form-control" placeholder="Ingrese Descripción">
          </div>

          <div class="form-group">
            <label for="txtTipo">Tipo: </label>
            <input type="text" id="txtTipo" name="txtTipo" value="" class="form-control" placeholder="Ingrese Tipo">
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
            <a href="<?php echo SERVERURL ?>inicio/nParametro" class="btn btn-light">Listar Datos</a>
        </div>

      </fieldset>


    </form>
  </div>

</body>

</html>