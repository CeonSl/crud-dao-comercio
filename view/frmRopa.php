<?php
$rutas = array();
$rutas = explode("/", ($_GET['cmd']));
?>

<body class="bg-dark">
  <div class="jumbotron bg-dark col-lg-6 col-md-6 col-sm-6 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Formulario de registro ropa</h1>
    <form <?php if (!isset($rutas[2])) { ?>action="<?php echo SERVERURL ?>registrar/ropa" <?php } else { ?>action="<?php echo SERVERURL ?>editar/ropa/<?= $rutas[2] ?>" <?php } ?>method="post" enctype="multipart/form-data">
      <fieldset style="width:350px ;">
        <legend>Datos</legend>
        <?php if (isset($rutas[2])) { ?>
          <div class="form-group">
            <label for="txtId">Id: </label>
            <input type="text" id="txtId" name="txtId" value="<?= $rutas[2] ?>" class="form-control" disabled>
          </div>

          <div class="form-group">
            <label for="txtPrenda">Prenda: </label>
            <input type="text" id="txtPrenda" name="txtPrenda" value="<?= $rst->prenda ?>" class="form-control" placeholder="Ingrese Prenda">
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
            <select class="form-select" id="txtColor" name="txtColor">
              <?php foreach ($rstColor as $key => $value) {
                if (($rst->descripcion) == ($value->descripcion)) { ?>
                  <option selected><?= $value->descripcion ?></option>
                <?php } else { ?>
                  <option><?= $value->descripcion ?></option>
              <?php }
              } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="txtImagen">Imagen: </label>
            <input type="file" id="txtImagen" name="txtImagen" class="form-control" placeholder="Ingrese Imagen" required>
          </div>
          <div class="form-group">
            <label>Imagen Actual:</label>
            <img src="<?=SERVERURL?>view/img/<?=$rst->imagenRef?>" alt="" width="200px" height="200px">
          </div>
        <?php
        } else {
        ?>

          <div class="form-group">
            <label for="txtPrenda">Prenda: </label>
            <input type="text" id="txtPrenda" name="txtPrenda" value="" class="form-control" placeholder="Ingrese Prenda">
          </div>

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
            <select class="form-select" id="txtColor" name="txtColor">
              <?php foreach ($rst as $key => $value) { ?>
                <option><?= $value->descripcion ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="txtImagen">Imagen: </label>
            <input type="file" id="txtImagen" name="txtImagen" class="form-control">
          </div>

          <div class="mb-2 col-md-10 px-0 ">
            <?php if (isset($em)) : ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $em ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif ?>
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