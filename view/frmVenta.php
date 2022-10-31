<?php
$rutas = array();
$rutas = explode("/", ($_GET['cmd']));
?>

<body class="bg-dark">
  <div class="jumbotron bg-dark col-lg-6 col-md-6 col-sm-6 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Formulario de registro de ventas</h1>
    <form <?php if (!isset($rutas[2])) { ?>action="<?php echo SERVERURL ?>registrar/venta" <?php } else { ?>action="<?php echo SERVERURL ?>editar/venta/<?= $rutas[2] ?>" <?php } ?>method="post">
      <fieldset style="width:300px ;">
        <legend>Datos Generales</legend>
        <?php if (isset($rutas[2])) { ?>
          <div class="form-group">
            <label for="txtId">Id: </label>
            <input type="text" id="txtId" name="txtId" value="<?= $rutas[2] ?>" class="form-control" disabled>
          </div>

          <div class="form-group">
            <label for="txtIdcliente">ID Cliente: </label>
            <input type="text" id="txtIdcliente" name="txtIdcliente" value="<?= $rst->idcliente ?>" class="form-control" placeholder="Ingrese ID Cliente">
          </div>

          <div class="form-group">
            <label for="txtIdropa">ID Ropa: </label>
            <input type="text" id="txtIdropa" name="txtIdropa" value="<?= $rst->idropa ?>" class="form-control" placeholder="Ingrese ID Ropa">
          </div>

          <div class="form-group">
            <label for="txtCantidad">Cantidad: </label>
            <input type="text" id="txtCantidad" name="txtCantidad" value="<?= $rst->cantidad ?>" class="form-control" placeholder="Ingrese Cantidad">
          </div>

          <div class="form-group">
            <label for="txtPrecio">Precio: </label>
            <input type="text" id="txtPrecio" name="txtPrecio" value="<?= $rst->precio ?>" class="form-control" placeholder="Ingrese Precio">
          </div>

          <div class="form-group">
            <label for="txtFecha">Fecha: </label>
            <input type="text" id="txtFecha" name="txtFecha" value="<?= $rst->fecha ?>" class="form-control" placeholder="Ingrese Fecha">
          </div>

          <div class="form-group">
            <label for="txtTotal">Total: </label>
            <input type="text" id="txtTotal" name="txtTotal" value="<?= $rst->total ?>" class="form-control" placeholder="Ingrese Total">
          </div>

          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <input type="text" id="txtEstado" name="txtEstado" value="<?= $rst->estado ?>" class="form-control" placeholder="Ingrese Estado">
          </div>
        <?php
        } else {
        ?>
          <div class="form-group">
            <label for="txtIdcliente">ID Cliente: </label>
            <input type="text" id="txtIdcliente" name="txtIdcliente" value="" class="form-control" placeholder="Ingrese ID Cliente">
          </div>

          <div class="form-group">
            <label for="txtIdropa">ID Ropa: </label>
            <input type="text" id="txtIdropa" name="txtIdropa" value="" class="form-control" placeholder="Ingrese ID Ropa">
          </div>

          <div class="form-group">
            <label for="txtCantidad">Cantidad: </label>
            <input type="text" id="txtCantidad" name="txtCantidad" value="" class="form-control" placeholder="Ingrese Cantidad">
          </div>

          <div class="form-group">
            <label for="txtPrecio">Precio: </label>
            <input type="text" id="txtPrecio" name="txtPrecio" value="" class="form-control" placeholder="Ingrese Precio">
          </div>

          <div class="form-group">
            <label for="txtFecha">Fecha: </label>
            <input type="text" id="txtFecha" name="txtFecha" value="" class="form-control" placeholder="Ingrese Fecha">
          </div>

          <div class="form-group">
            <label for="txtTotal">Total: </label>
            <input type="text" id="txtTotal" name="txtTotal" value="" class="form-control" placeholder="Ingrese Total">
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
            <a href="<?php echo SERVERURL ?>inicio/venta" class="btn btn-light">Listar Datos</a>
        </div>

      </fieldset>


    </form>
  </div>

</body>

</html>