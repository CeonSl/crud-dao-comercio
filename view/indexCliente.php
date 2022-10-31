<?php
include_once("model/cliente/entidad/Cliente.php");
include_once("model/cliente/dao/DaoCliente.php");
?>
<body class="bg-dark">

  <div class="jumbotron bg-dark col-lg-4 col-md-4 col-sm-4 float-md-center" style="margin: 20px;">
    <h1 style="color: #fff;">Listado de Clientes</h1>

    <p>
      <a href="<?php echo SERVERURL ?>registrar/cliente" class="btn btn-warning">Nuevo</a>
    </p>

    <table style="width:1200px ;" class="table table-hover rounded-bottom table-light">
      <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Género</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Estado</th>
        <th>Opciones</th>
      </tr>
      <?php
      foreach ($rst as $key => $value) {

      ?>
        <tr>
          <td><?= $value->id ?></td>
          <td><?= $value->nombres ?></td>
          <td><?= $value->apellidos ?></td>
          <td><?= $value->descripcion ?></td>
          <td><?= $value->direccion ?></td>
          <td><?= $value->telefono ?></td>
          <td><?= $value->correo ?></td>
          <td><?= $value->estado ?></td>
          <td>
            <a href="<?php echo SERVERURL ?>editar/cliente/<?= $value->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?php echo SERVERURL ?>eliminar/cliente/<?= $value->id ?>" class="btn btn-danger">Eliminar </a>
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