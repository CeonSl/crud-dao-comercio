<?php

require_once("model/nivel_parametro/entidad/NParametro.php");
require_once("model/nivel_parametro/dao/DaoNParametro.php");

class NParametroController
{

    public $nParametro;
    function __construct()
    {
    }
    public function registrar()
    {

        if (isset($_POST["txtDescripcion"])) {
            $nparametro = new NParametro();
            $nparametro->setDescripcion($_POST["txtDescripcion"]);
            $nparametro->setTipo($_POST["txtTipo"]);
            $nparametro->setEstado($_POST["txtEstado"]);
          
            $daoNParametro = new DaoNParametro();
            $daoNParametro->Insert($nparametro);
            $this->inicio();
        } else {
            require("view/frmNParametro.php");
        }
    }

    public function eliminar()
    {

        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2])) {

            $daoNParametro = new DaoNParametro();
            $daoNParametro->Delete($rutas[2]);
            $this->inicio();
        }
    }

    public function editar()
    {
        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2]) && isset($_POST["txtDescripcion"])) {
            $id = $rutas[2];
            $nparametro = new NParametro();
            $nparametro->setIdnparametro($id);
            $nparametro->setDescripcion($_POST["txtDescripcion"]);
            $nparametro->setTipo($_POST["txtTipo"]);
            $nparametro->setEstado($_POST["txtEstado"]);
          
            $daoNParametro = new DaoNParametro();
            $daoNParametro->Update($nparametro);
            $this->inicio();
        } else {
            $daoNParametro = new DaoNParametro();
            $rst = $daoNParametro->Select($rutas[2]);
            require("view/frmNParametro.php");
        }
    }

    public function index()
    {
        require("view/index.php");
    }

    public function inicio()
    {

        $daoNParametro = new DaoNParametro();
        $rst = $daoNParametro->Select();
        //Le paso los datos a la vista
        require("view/indexNParametro.php");
    }
}
