<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <title>CRUD</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
  <div class="container p-2 text-center" >
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">CRUD USUARIOS</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="row">
              <img class="col-md-6 offset-md-3" src="view/img/usuario.png" width="300px" alt="">
              <a href="<?php echo SERVERURL ?>inicio/usuario" class="btn btn-warning ">Siguiente</a>
            </div>


          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">CRUD CLIENTES</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

            <div class="row">
              <img class="col-md-6 offset-md-3" src="view/img/cliente.png" width="300px" alt="">
              <a href="<?php echo SERVERURL ?>inicio/cliente" class="btn btn-warning ">Siguiente</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container p-2 text-center">
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">CRUD VENTA</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="row">
            <img class="col-md-6 offset-md-3" src="view/img/ventas.png" width="200px" alt="">
            <a href="<?php echo SERVERURL ?>inicio/venta" class="btn btn-warning ">Siguiente</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">CRUD ROPA</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="row">
            <img class="col-md-6 offset-md-3" src="view/img/ropa.png" width="200px" alt="">
            <a href="<?php echo SERVERURL ?>inicio/ropa" class="btn btn-warning ">Siguiente</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container p-2 text-center">
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">CRUD ENVIO</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="row">
            <img class="col-md-6 offset-md-3" src="view/img/envio.png" width="200px" alt="">
            <a href="<?php echo SERVERURL ?>inicio/envio" class="btn btn-warning ">Siguiente</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">CRUD PARAMETRO</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="row">
            <img class="col-md-6 offset-md-3" src="view/img/parametro.png" width="200px" alt="">
            <a href="<?php echo SERVERURL ?>inicio/nParametro" class="btn btn-warning ">Siguiente</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>