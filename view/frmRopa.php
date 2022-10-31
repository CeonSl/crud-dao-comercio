<?php
$rutas = array();
$rutas = explode("/", ($_GET['cmd']));
?>

<body class="bg-dark">
  <div class="jumbotron bg-dark col-lg-6 col-md-6 col-sm-6 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Formulario de registro ropa</h1>
    <form <?php if (!isset($rutas[2])) { ?>action="<?php echo SERVERURL ?>registrar/ropa" <?php } else { ?>action="<?php echo SERVERURL ?>editar/ropa/<?= $rutas[2] ?>" <?php } ?>method="post">
      <fieldset style="width:300px ;">
        <legend>Datos</legend>
        <?php if (isset($rutas[2])) { ?>
          <div class="form-group">
            <label for="txtId">Id: </label>
            <input type="text" id="txtId" name="txtId" value="<?= $rutas[2] ?>" class="form-control" disabled>
          </div>

          <div class="form-group">
            <label for="txtStock">Stock: </label>
            <input type="text" id="txtStock" name="txtStock" value="<?= $rst->stock ?>" class="form-control" placeholder="Ingrese Stock">
          </div>

          <div class="form-group">
            <label for="txtPrecio">Precio: </label>
            <input type="text" id="txtPrecio" name="txtPrecio" value="<?= $rst->precio ?>" class="form-control" placeholder="Ingrese Precio">
          </div>

          <div class="form-group">
            <label for="txtTalla">Talla: </label>
            <input type="text" id="txtTalla" name="txtTalla" value="<?= $rst->talla ?>" class="form-control" placeholder="Ingrese Talla">
          </div>

          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <input type="text" id="txtEstado" name="txtEstado" value="<?= $rst->estado ?>" class="form-control" placeholder="Ingrese Estado">
          </div>

          <div class="form-group">
            <label for="txtColor">Color: </label>
            <input type="text" id="txtColor" name="txtColor" value="<?= $rst->color ?>" class="form-control" placeholder="Ingrese Color">
          </div>

        <?php
        } else {
        ?>
          <div class="form-group">
            <label for="txtStock">Stock: </label>
            <input type="text" id="txtStock" name="txtStock" value="" class="form-control" placeholder="Ingrese Stock">
          </div>

          <div class="form-group">
            <label for="txtPrecio">Precio: </label>
            <input type="text" id="txtPrecio" name="txtPrecio" value="" class="form-control" placeholder="Ingrese Precio">
          </div>

          <div class="form-group">
            <label for="txtTalla">Talla: </label>
            <input type="text" id="txtTalla" name="txtTalla" value="" class="form-control" placeholder="Ingrese Talla">
          </div>

          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <input type="text" id="txtEstado" name="txtEstado" value="" class="form-control" placeholder="Ingrese Estado">
          </div>

          <div class="form-group">
            <label for="txtColor">Color: </label>
            <input type="text" id="txtColor" name="txtColor" value="" class="form-control" placeholder="Ingrese Color">
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
            <a href="<?php echo SERVERURL ?>inicio/ropa" class="btn btn-light">Listar Datos</a>
        </div>



      </fieldset>


    </form>
  </div>

</body>

</html>