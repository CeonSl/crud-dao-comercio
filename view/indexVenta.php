<body class="bg-dark">

  <div class="jumbotron bg-dark col-lg-4 col-md-4 col-sm-4 float-md-center" style="margin: 20px; color: #fff;">
    <h1>Listado de Ventas</h1>

    <p>
      <a href="<?php echo SERVERURL ?>registrar/venta" class="btn btn-warning">Nuevo</a>
    </p>

    <table style="width:1200px ;" class="table table-hover rounded-bottom table-light">
      <tr>
        <th>Id ventas</th>
        <th>Id cliente</th>
        <th>Id ropa</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Fecha</th>
        <th>Total</th>
        <th>Estado</th>
        <th>Opciones</th>
      </tr>
      <?php
      foreach ($rst as $key => $value) {

      ?>
        <tr>
          <td><?= $value->idventa ?></td>
          <td><?= $value->idcliente ?></td>
          <td><?= $value->idropa ?></td>
          <td><?= $value->cantidad ?></td>
          <td><?= $value->precio ?></td>
          <td><?= $value->fecha ?></td>
          <td><?= $value->total ?></td>
          <td><?= $value->estado ?></td>
          <td>
            <a href="<?php echo SERVERURL ?>editar/venta/<?= $value->idventa ?>" class="btn btn-primary">Editar </a>
            <a href="<?php echo SERVERURL ?>eliminar/venta/<?= $value->idventa ?>" class="btn btn-danger">Eliminar </a>
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