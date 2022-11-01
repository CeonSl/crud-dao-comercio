<?php

require_once("model/usuario/entidad/Usuario.php");
require_once("model/usuario/dao/DaoUsuario.php");
require_once("model/cliente/dao/DaoCliente.php");

class UsuarioController
{

    public $usuario;
    function __construct()
    {
    }
    public function registrar()
    {

        if (isset($_POST["txtNombres"])) {
            $usuario = new Usuario();
            $daoCliente = new DaoCliente();
            $daoUsuario = new DaoUsuario();

            $usuario->setNombres($_POST["txtNombres"]);
            $usuario->setApellidos($_POST["txtApellidos"]);

            $rst = $daoCliente->FindIdGenre($_POST["txtGenero"]);

            $usuario->setGenero($rst->id);
            $usuario->setDireccion($_POST["txtDireccion"]);
            $usuario->setTelefono($_POST["txtTelefono"]);
            $usuario->setCorreo($_POST["txtCorreo"]);
            $usuario->setUsuario($_POST["txtUsuario"]);
            $usuario->setPassw($_POST["txtContraseña"]);
            $usuario->setFechaCreacion($_POST["txtFechaCreacion"]);

            $rstTipo = $daoUsuario->FindIdType($_POST["txtTipoUsuario"]);
            
            $usuario->setTipoUsuario($rstTipo->id);
            $usuario->setEstado($_POST["txtEstado"]);

            
            $daoUsuario->Insert($usuario);
            $this->inicio();
        } else {
            $daoCliente = new DaoCliente();
            $rstG = $daoCliente->FillGenre();
            $daoUsuario = new DaoUsuario();
            $rstTipoU = $daoUsuario->FillType();
            require("view/frmUsuario.php");
        }
    }

    public function eliminar()
    {

        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2])) {

            $daoU = new DaoUsuario();
            $daoU->Delete($rutas[2]);
            $this->inicio();
        }
    }

    // public function editar()
    // {
    //     $rutas = explode("/", $_GET["cmd"]);
    //     if (isset($rutas[2]) && isset($_POST["txtNombres"])) {
    //         $id = $rutas[2];
    //         $usuario = new Usuario();
    //         $usuario->setIdusuario($id);
    //         $usuario->setContraseña($_POST["txtContraseña"]);
    //         $usuario->setCorreo($_POST["txtCorreo"]);
    //         $usuario->setFechacreacion($_POST["txtFechacreacion"]);
    //         $usuario->setEstado($_POST["txtEstado"]);

    //         $daoUsuario = new DaoUsuario();
    //         $daoUsuario->Update($usuario);
    //         $this->inicio();
    //     } else {
    //         $daoU = new DaoUsuario();
    //         $rst = $daoU->Select($rutas[2]);
    //         require("view/frmUsuario.php");
    //     }
    // }


    public function index()
    {
        require("view/index.php");
    }

    public function inicio()
    {

        $daoU = new DaoUsuario();
        $rst = $daoU->Select();
        //Le paso los datos a la vista
        require("view/indexUsuario.php");
    }
}
