<?php

require_once("model/ropa/entidad/Ropa.php");
require_once("model/ropa/dao/DaoRopa.php");

class RopaController
{

    public $ropa;
    function __construct()
    {
    }
    public function registrar()
    {

        if (isset($_POST["txtStock"])) {
            $ropa = new Ropa();
            $ropa->setStock($_POST["txtStock"]);
            $ropa->setPrecio($_POST["txtPrecio"]);
            $ropa->setTalla($_POST["txtTalla"]);
            $ropa->setEstado($_POST["txtEstado"]);
            $ropa->setColor($_POST["txtColor"]);
          
            $daoRopa = new DaoRopa();
            $daoRopa->Insert($ropa);
            $this->inicio();
        } else {
            require("view/frmRopa.php");
        }
    }

    public function eliminar()
    {

        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2])) {

            $daoR = new DaoRopa();
            $daoR->Delete($rutas[2]);
            $this->inicio();
        }
    }

    public function editar()
    {
        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2]) && isset($_POST["txtStock"])) {
            $id = $rutas[2];
            $ropa = new Ropa();
            $ropa->setIdropa($id);
            $ropa->setStock($_POST["txtStock"]);
            $ropa->setPrecio($_POST["txtPrecio"]);
            $ropa->setTalla($_POST["txtTalla"]);
            $ropa->setEstado($_POST["txtEstado"]);
            $ropa->setColor($_POST["txtColor"]);
          
            $daoRopa = new DaoRopa();
            $daoRopa->Update($ropa);
            $this->inicio();
        } else {
            $daoR = new DaoRopa();
            $rst = $daoR->Select($rutas[2]);
            require("view/frmRopa.php");
        }
    }

    public function index()
    {
        require("view/index.php");
    }

    public function inicio()
    {

        $daoR = new DaoRopa();
        $rst = $daoR->Select();
        //Le paso los datos a la vista
        require("view/indexRopa.php");
    }
}
