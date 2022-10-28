<?php

//Incluyo los archivos necesarios
require("model/cliente/entidad/Cliente.php");
require("controller/ClienteController.php");

require("model/envio/entidad/Envio.php");
require("controller/EnvioController.php");

require("model/nivel_parametro/entidad/NParametro.php");
require("controller/NParametroController.php");

require("model/ropa/entidad/Ropa.php");
require("controller/RopaController.php");

require("model/usuario/entidad/Usuario.php");
require("controller/UsuarioController.php");

require("model/venta/entidad/Venta.php");
require("controller/VentaController.php");
//Instancio el controlador
$controllerCliente = new ClienteController();
$controllerEnvio = new EnvioController();
$controllerNParametro = new NParametroController();
$controllerRopa = new RopaController();
$controllerUsuario = new UsuarioController();
$controllerVenta = new VentaController();

include ("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumno</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <?php
    $cmd = "";
    $rutas =  array();
    $tablas = [ "cliente", "envio", "nParametro", "ropa", "usuario", "venta"];
    $controllers = [$controllerCliente, $controllerEnvio, $controllerNParametro, $controllerRopa, $controllerUsuario, $controllerVenta];

    if (isset($_GET["cmd"])) {
        $rutas = explode("/", $_GET["cmd"]);
    }
    for ($i = 0; $i < 6; $i++) {

        if ($rutas[0] == "eliminar" && $rutas[1] == $tablas[$i]) {
           $controllers[$i]->eliminar();
            break;
        } else if ($rutas[0] == "registrar" && $rutas[1] == $tablas[$i]) {
            $controllers[$i]->registrar();
            break;
        } else if ($rutas[0] == "editar" && $rutas[1] == $tablas[$i]) {
            $controllers[$i]->editar();
            break;
        } else if ($rutas[0] == "inicio" && $rutas[1] == $tablas[$i]) {
            $controllers[$i]->inicio();
            break;
        } else if ($rutas[0] == "eliminar" && $rutas[1] == $tablas[$i]) {
            $controllers[$i]->eliminar();
            break;
        } else {
            if ($i >= 5) {
                $controllerCliente->index();
                break;
            } else {
                continue;
            }
        }
    }

    ?>

<?php include "includes/footer.php"; ?>
</body>
</head>