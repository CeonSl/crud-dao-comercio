<?php

require_once("model/envio/entidad/Envio.php");
require_once("model/envio/dao/DaoEnvio.php");

class EnvioController
{

    public $envio;
    function __construct()
    {
    }
    public function registrar()
    {

        if (isset($_POST["txtFecha"])) {
            $envio = new Envio();
            $envio->setFecha($_POST["txtFecha"]);
            $envio->setEstado($_POST["txtEstado"]);

            $daoEnvio = new DaoEnvio();
            $daoEnvio->Insert($envio);
            $this->inicio();
        } else {
            require("view/frmEnvio.php");
        }
    }

    public function eliminar()
    {

        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2])) {

            $daoE = new DaoEnvio();
            $daoE->Delete($rutas[2]);
            $this->inicio();
        }
    }

    public function editar()
    {
        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2]) && isset($_POST["txtFecha"])) {
            $id = $rutas[2];
            $envio = new Envio();
            $envio->setIdenvio($id);
            $envio->setFecha($_POST["txtFecha"]);
            $envio->setEstado($_POST["txtEstado"]);
          
            $daoEnvio = new DaoEnvio();
            $daoEnvio->Update($envio);
            $this->inicio();
        } else {
            $daoE = new DaoEnvio();
            $rst = $daoE->Select($rutas[2]);
            require("view/frmEnvio.php");
        }
    }

    public function index()
    {
        require("view/index.php");
    }

    public function inicio()
    {

        $daoE = new DaoEnvio();
        $rst = $daoE->Select();
        //Le paso los datos a la vista
        require("view/indexEnvio.php");
    }
}
