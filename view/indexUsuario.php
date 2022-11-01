<body class="bg-dark">

  <div class="jumbotron bg-dark col-lg-11 col-md-11 col-sm-11 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Listado de Usuario</h1>

    <p>
      <a href="<?php echo SERVERURL ?>registrar/usuario" class="btn btn-warning">Nuevo</a>
    </p>

    <table style="width:100% ;" class="table table-hover rounded-bottom table-light">
      <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Género</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Fecha Creación</th>
        <th>Tipo Usuario</th>
        <th>Estado</th>
        <th>Opciones</th>
      </tr>
      <?php
      foreach ($rst as $key => $value) {

      ?>
        <tr>
          <td><?= $value->nombres ?></td>
          <td><?= $value->apellidos ?></td>
          <td><?= $value->genero ?></td>
          <td><?= $value->direccion ?></td>
          <td><?= $value->telefono ?></td>
          <td><?= $value->correo ?></td>
          <td><?= $value->usuario ?></td>
          <td><?= $value->passw ?></td>
          <td><?= $value->fechaCreacion ?></td>
          <td><?= $value->tipoUsuario ?></td>
          <td><?= $value->estado ?></td>
          <td>
            <a href="<?php echo SERVERURL ?>editar/usuario/<?= $value->usuario ?>" class="btn btn-primary">Editar </a>
            <a href="<?php echo SERVERURL ?>eliminar/usuario/<?= $value->usuario ?>" class="btn btn-danger">Eliminar </a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
    <p>
      <a href="<?php echo SERVERURL ?>index" class="btn btn-light">Volver</a>
    </p>
  </div>

</body>

</html>