<?php

require_once("model/usuario/entidad/Usuario.php");
require_once("model/usuario/dao/DaoUsuario.php");

class UsuarioController
{

    public $usuario;
    function __construct()
    {
    }
    public function registrar()
    {

        if (isset($_POST["txtCorreo"])) {
            $usuario = new Usuario();
            $usuario->setContraseña($_POST["txtContraseña"]);
            $usuario->setCorreo($_POST["txtCorreo"]);
            $usuario->setFechacreacion($_POST["txtFechacreacion"]);
            $usuario->setEstado($_POST["txtEstado"]);

            $daoUsuario = new DaoUsuario();
            $daoUsuario->Insert($usuario);
            $this->inicio();
        } else {
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

    public function editar()
    {
        $rutas = explode("/", $_GET["cmd"]);
        if (isset($rutas[2]) && isset($_POST["txtNombres"])) {
            $id = $rutas[2];
            $usuario = new Usuario();
            $usuario->setIdusuario($id);
            $usuario->setContraseña($_POST["txtContraseña"]);
            $usuario->setCorreo($_POST["txtCorreo"]);
            $usuario->setFechacreacion($_POST["txtFechacreacion"]);
            $usuario->setEstado($_POST["txtEstado"]);

            $daoUsuario = new DaoUsuario();
            $daoUsuario->Update($usuario);
            $this->inicio();
        } else {
            $daoU = new DaoUsuario();
            $rst = $daoU->Select($rutas[2]);
            require("view/frmUsuario.php");
        }
    }

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
