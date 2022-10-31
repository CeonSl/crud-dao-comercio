<body class="bg-dark">

  <div class="jumbotron bg-dark col-lg-4 col-md-4 col-sm-4 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Listado de Usuario</h1>

    <p>
      <a href="<?php echo SERVERURL ?>registrar/usuario" class="btn btn-warning">Nuevo</a>
    </p>

    <table style="width:1200px ;" class="table table-hover rounded-bottom table-light">
      <tr>
        <th>Id</th>
        <th>Contraseña</th>
        <th>Correo</th>
        <th>Fecha de Creación</th>
        <th>Estado</th>
        <th>Opciones</th>
      </tr>
      <?php
      foreach ($rst as $key => $value) {

      ?>
        <tr>
          <td><?= $value->idusuario ?></td>
          <td><?= $value->contraseña ?></td>
          <td><?= $value->correo ?></td>
          <td><?= $value->fechacreacion ?></td>
          <td><?= $value->estado ?></td>
          <td>
            <a href="<?php echo SERVERURL ?>editar/usuario/<?= $value->idusuario ?>" class="btn btn-primary">Editar </a>
            <a href="<?php echo SERVERURL ?>eliminar/usuario/<?= $value->idusuario ?>" class="btn btn-danger">Eliminar </a>
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