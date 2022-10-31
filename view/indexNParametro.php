<body class="bg-dark">

  <div class="jumbotron bg-dark col-lg-6 col-md-6 col-sm-6 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Listado de nivel de parametro</h1>

    <p>
      <a href="<?php echo SERVERURL ?>registrar/nParametro" class="btn btn-warning">Nuevo</a>
    </p>
    <table style="width:100% ;" class="table table-hover rounded-bottom table-light">
      <tr>
        <th>Id</th>
        <th>Descripcion</th>
        <th>Tipo</th>
        <th>Estado</th>
        <th>Opciones</th>
      </tr>
      <?php
      foreach ($rst as $key => $value) {

      ?>
        <tr>
          <td><?= $value->id ?></td>
          <td><?= $value->descripcion ?></td>
          <td><?= $value->tipo ?></td>
          <td><?= $value->estado ?></td>
          <td>
            <a href="<?php echo SERVERURL ?>editar/nParametro/<?= $value->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?php echo SERVERURL ?>eliminar/nParametro/<?= $value->id ?>" class="btn btn-danger">Eliminar </a>
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