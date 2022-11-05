<body class="bg-dark">


  <div class="jumbotron bg-dark col-lg-4 col-md-4 col-sm-4 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Listado de Ropa</h1>

    <p>
      <a href="<?php echo SERVERURL ?>registrar/ropa" class="btn btn-warning">Nuevo</a>
    </p>

    <table style="width:1200px ;" class="table table-hover rounded-bottom table-light">
      <tr>
        <th>Id</th>
        <th>Prenda</th>
        <th>Stock</th>
        <th>Precio</th>
        <th>Talla</th>
        <th>Estado</th>
        <th>Color</th>
        <th>Opciones</th>
      </tr>
      <?php
      foreach ($rst as $key => $value) {

      ?>
        <tr>
          <td><?= $value->id ?></td>
          <td><?= $value->prenda?></td>
          <td><?= $value->stock ?></td>
          <td><?= $value->precio ?></td>
          <td><?= $value->talla ?></td>
          <td><?= $value->estado ?></td>
          <td><?= $value->descripcion ?></td>
          <td><img style="height: 100px; width: 100px;" src="data:image/jpg;base64,<?= base64_encode($value->imagen)  ?>" alt=""></td>
          <td>
            <a href="<?php echo SERVERURL ?>editar/ropa/<?= $value->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?php echo SERVERURL ?>eliminar/ropa/<?= $value->id ?>" class="btn btn-danger">Eliminar </a>
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