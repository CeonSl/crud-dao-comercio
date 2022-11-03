<?php

require_once("model/cliente/entidad/Cliente.php");
require_once("model/cliente/dao/DaoCliente.php");
require_once("model/genero/DaoGenero.php");

class ClienteController
{

    public $cliente;
    function __construct()
    {
    }
    public function registrar()
    {

        if (isset($_POST["txtNombres"])) {
            
            $cliente = new Cliente();
            $cliente->setNombres($_POST["txtNombres"]);
            $cliente->setApellidos($_POST["txtApellidos"]);
            $cliente->setDireccion($_POST["txtDireccion"]);
            $cliente->setTelefono($_POST["txtTelefono"]);
            $cliente->setCorreo($_POST["txtCorreo"]);
            $cliente->setEstado($_POST["txtEstado"]);

            $daoGenero = new DaoGenero();
            $rst = $daoGenero->FindIdGenre($_POST["txtGenero"]);
            $cliente->setGenero($rst->id);

            $daoCliente = new DaoCliente();
            $daoCliente->Insert($cliente);
            $this->inicio();
        } else {
            $daoGenero = new DaoGenero();
            $rst = $daoGenero->FillGenre("Genero");
            require("view/frmCliente.php");
        }
    }

    public function eliminar()
    {

        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2])) {

            $daoC = new DaoCliente();
            $daoC->Delete($rutas[2]);
            $this->inicio();
        }
    }

    public function editar()
    {
        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2]) && isset($_POST["txtNombres"])) {
            $id = $rutas[2];
            $cliente = new Cliente();
            
            $cliente->setNombres($_POST["txtNombres"]);
            $cliente->setApellidos($_POST["txtApellidos"]);
            $cliente->setDireccion($_POST["txtDireccion"]);
            $cliente->setTelefono($_POST["txtTelefono"]);
            $cliente->setCorreo($_POST["txtCorreo"]);
            $cliente->setEstado($_POST["txtEstado"]);

            $daoGenero = new DaoGenero();
            $rst = $daoGenero->FindIdGenre($_POST["txtGenero"]);
            $cliente->setGenero($rst->id);

            $cliente->setIdcliente($id);

            $daoCliente = new DaoCliente();
            $daoCliente->Update($cliente);
            $this->inicio();
        } else {
            $daoC = new DaoCliente();
            $rst = $daoC->Select($rutas[2]);

            $daoGenero = new DaoGenero();
            $rstGenero = $daoGenero->FillGenre("Genero");
            require("view/frmCliente.php");
        }
    }

    public function index()
    {
        require("view/index.php");
    }

    public function inicio()
    {

        $daoC = new DaoCliente();
        $rst = $daoC->Select();
        //Le paso los datos a la vista
        require("view/indexCliente.php");
    }
}
