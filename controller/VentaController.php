<?php

require_once("model/venta/entidad/Venta.php");
require_once("model/venta/dao/DaoVenta.php");

class VentaController
{

    public $venta;
    function __construct()
    {
    }
    public function registrar()
    {

        if (isset($_POST["txtEstado"])) {
            $venta = new Venta();
            $venta->setIdropa($_POST["txtIdropa"]);
            $venta->setCantidad($_POST["txtCantidad"]);
            $venta->setPrecio($_POST["txtPrecio"]);
            $venta->setFecha($_POST["txtFecha"]);
            $venta->setTotal($_POST["txtTotal"]);
            $venta->setEstado($_POST["txtEstado"]);
          
            $daoVenta = new DaoVenta();
            $daoVenta->Insert($venta);
            $this->inicio();
        } else {
            require("view/frmVenta.php");
        }
    }

    public function eliminar()
    {

        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2])) {

            $daoV = new DaoVenta();
            $daoV->Delete($rutas[2]);
            $this->inicio();
        }
    }

    public function editar()
    {
        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2]) && isset($_POST["txtEstado"])) {
            $id = $rutas[2];
            $venta = new Venta();
            $venta->setIdventa($id);
            $venta->setIdcliente($_POST["txtIdcliente"]);
            $venta->setIdropa($_POST["txtIdropa"]);
            $venta->setCantidad($_POST["txtCantidad"]);
            $venta->setPrecio($_POST["txtPrecio"]);
            $venta->setFecha($_POST["txtFecha"]);
            $venta->setTotal($_POST["txtTotal"]);
            $venta->setEstado($_POST["txtEstado"]);
          
            $daoVenta = new DaoVenta();
            $daoVenta->Update($venta);
            $this->inicio();
        } else {
            $daoV = new DaoVenta();
            $rst = $daoV->Select($rutas[2]);
            require("view/frmVenta.php");
        }
    }

    public function index()
    {
        require("view/index.php");
    }

    public function inicio()
    {

        $daoV = new DaoVenta();
        $rst = $daoV->Select();
        //Le paso los datos a la vista
        require("view/indexVenta.php");
    }
}
