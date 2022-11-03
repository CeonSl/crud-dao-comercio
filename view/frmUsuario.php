<?php
$rutas = array();
$rutas = explode("/", ($_GET['cmd']));
?>

<body class="bg-dark">
  <div class="jumbotron bg-dark col-lg-8 col-md-8 col-sm-8 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Formulario de registro usuarios</h1>
    <form <?php if (!isset($rutas[2])) { ?>action="<?php echo SERVERURL ?>registrar/usuario" <?php } else { ?>action="<?php echo SERVERURL ?>editar/usuario/<?= $rutas[2] ?>" <?php } ?>method="post">
      <fieldset style="width:50% ;">
        <legend>Datos Personales</legend>
        <?php if (isset($rutas[2])) { ?>
          <div class="form-group">
            <label for="txtNombres">Nombres: </label>
            <input type="text" id="txtNombres" name="txtNombres" value="<?= $rst -> nombres?>" class="form-control" placeholder="Ingrese Nombres">
          </div>

          <div class="form-group">
            <label for="txtApellidos">Apellidos: </label>
            <input type="text" id="txtApellidos" name="txtApellidos" value="<?= $rst -> apellidos?>" class="form-control" placeholder="Ingrese Apellidos">
          </div>

          <div class="form-group">
            <label for="txtGenero">Género: </label>
            <select class="form-select" id="txtGenero" name="txtGenero">
              <?php  foreach ($rstGenero as $key => $value) {
                if(($rst->descripcion) == ($value->descripcion)){?>
              <option selected><?=$value -> descripcion?></option>
              <?php }else{?>
              <option ><?=$value -> descripcion?></option>
              <?php }}?>
            </select>
          </div>

          <div class="form-group">
            <label for="txtDireccion">Dirección: </label>
            <input type="text" id="txtDireccion" name="txtDireccion" value="<?= $rst -> direccion?>" class="form-control" placeholder="Ingrese Direccion">
          </div>

          <div class="form-group">
            <label for="txtTelefono">Teléfono: </label>
            <input type="text" id="txtTelefono" name="txtTelefono" value="<?= $rst ->  telefono?>" class="form-control" placeholder="Ingrese Telefono">
          </div>

          <div class="form-group">
            <label for="txtCorreo">Correo: </label>
            <input type="text" id="txtCorreo" name="txtCorreo" value="<?= $rst -> correo?>" class="form-control" placeholder="Ingrese Correo">
          </div>

          <div class="form-group">
            <label for="txtUsuario">Usuario: </label>
            <input type="text" id="txtUsuario" name="txtUsuario" value="<?= $rst -> usuario?>" class="form-control" placeholder="Ingrese Usuario">
          </div>

          <div class="form-group">
            <label for="txtContraseña">Contraseña: </label>
            <input type="text" id="txtContraseña" name="txtContraseña" value="<?= $rst -> passw?>" class="form-control" placeholder="Ingrese Contraseña">
          </div>

          <div class="form-group">
            <label for="txtFechaCreacion">Fecha Creación: </label>
            <input type="date" id="txtFechaCreacion" name="txtFechaCreacion" value="<?= $rst -> fechaCreacion?>" class="form-control" placeholder="Ingrese FechaCreacion">
          </div>

          <div class="form-group">
            <label for="txtTipoUsuario">Tipo Usuario: </label>
            <select class="form-select" id="txtTipoUsuario" name="txtTipoUsuario">
              <?php  foreach ($rstTipoU as $key => $value) {
                if(($rst->descripcion) == ($value->descripcion)){?>
              <option selected><?=$value -> descripcion?></option>
              <?php }else{?>
              <option ><?=$value -> descripcion?></option>
              <?php }}?>
            </select>
          </div>

          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <input type="text" id="txtEstdo" name="txtEstado" value="<?= $rst -> estado?>" class="form-control" placeholder="Ingrese Estado">
          </div>
          
        <?php
        } else {
        ?>
          <div class="form-group">
            <label for="txtNombres">Nombres: </label>
            <input type="text" id="txtNombres" name="txtNombres" value="" class="form-control" placeholder="Ingrese Nombres">
          </div>

          <div class="form-group">
            <label for="txtApellidos">Apellidos: </label>
            <input type="text" id="txtApellidos" name="txtApellidos" value="" class="form-control" placeholder="Ingrese Apellidos">
          </div>

          <div class="form-group">
            <label for="txtGenero">Género: </label>
            <select class="form-select" id="txtGenero" name="txtGenero">
              <?php foreach ($rstG as $key => $value) { ?>
                <option><?= $value->descripcion ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="txtDireccion">Dirección: </label>
            <input type="text" id="txtDireccion" name="txtDireccion" value="" class="form-control" placeholder="Ingrese Direccion">
          </div>

          <div class="form-group">
            <label for="txtTelefono">Teléfono: </label>
            <input type="text" id="txtTelefono" name="txtTelefono" value="" class="form-control" placeholder="Ingrese Telefono">
          </div>

          <div class="form-group">
            <label for="txtCorreo">Correo: </label>
            <input type="text" id="txtCorreo" name="txtCorreo" value="" class="form-control" placeholder="Ingrese Correo">
          </div>

          <div class="form-group">
            <label for="txtUsuario">Usuario: </label>
            <input type="text" id="txtUsuario" name="txtUsuario" value="" class="form-control" placeholder="Ingrese Usuario">
          </div>

          <div class="form-group">
            <label for="txtContraseña">Contraseña: </label>
            <input type="text" id="txtContraseña" name="txtContraseña" value="" class="form-control" placeholder="Ingrese Contraseña">
          </div>

          <div class="form-group">
            <label for="txtFechaCreacion">Fecha Creación: </label>
            <input type="date" id="txtFechaCreacion" name="txtFechaCreacion" value="" class="form-control" placeholder="Ingrese FechaCreacion">
          </div>

          <div class="form-group">
            <label for="txtTipoUsuario">Tipo Usuario: </label>
            <select class="form-select" id="txtTipoUsuario" name="txtTipoUsuario">
              <?php foreach ($rstTipoU as $key => $value) { ?>
                <option><?= $value->descripcion ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <input type="text" id="txtEstdo" name="txtEstado" value="" class="form-control" placeholder="Ingrese Estado">
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
            <a href="<?php echo SERVERURL ?>inicio/usuario" class="btn btn-light">Listar Datos</a>
        </div>



      </fieldset>


    </form>
  </div>

</body>

</html>