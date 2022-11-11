<?php

require_once("model/ropa/entidad/Ropa.php");
require_once("model/ropa/dao/DaoRopa.php");
require_once("model/nivel_parametro/dao/DaoNParametro.php");

class RopaController
{

    public $ropa;
    function __construct()
    {
    }
    public function registrar()
    {
        $daoNivelParametro = new DaoNParametro();
        if (isset($_POST["btnGuardar"]) && isset($_FILES['txtImagen'])) {

            $nombreImagen = $_FILES['txtImagen']['name'];
            $tamImagen = $_FILES['txtImagen']['size'];
            $tmp_name = $_FILES['txtImagen']['tmp_name'];
            $error = $_FILES['txtImagen']['error'];

            if ($error === 0) {
                if ($tamImagen > 125000) {

                    $rst = $daoNivelParametro->FillComboBox("Color");
                    $em = "Tu archivo es muy grande.";
                    require("view/frmRopa.php");
                } else {

                    $imagen_extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
                    $imagen_extension_lc = strtolower($imagen_extension);

                    $imagenPermitida = array('png', 'jpg', 'jpeg', 'webp');

                    if (in_array($imagen_extension, $imagenPermitida)) {
                        $nombreNuevaImagen = uniqid('img', true) . "." . $imagen_extension_lc;
                        $imagen_subida = "view/img/" . $nombreNuevaImagen;
                        move_uploaded_file($tmp_name, $imagen_subida);
                        //INSERTAR DATOS
                        $ropa = new Ropa();
                        $ropa->setPrenda($_POST["txtPrenda"]);
                        $ropa->setStock($_POST["txtStock"]);
                        $ropa->setPrecio($_POST["txtPrecio"]);
                        $ropa->setTalla($_POST["txtTalla"]);
                        $ropa->setEstado($_POST["txtEstado"]);
                        $ropa->setImagen($nombreNuevaImagen);

                        $rst = $daoNivelParametro->FindIdComboBox($_POST["txtColor"]);
                        $ropa->setColor($rst->id);

                        $daoRopa = new DaoRopa();
                        $daoRopa->Insert($ropa);
                        $this->inicio();
                    }
                }
            }
        } else {
            $rst = $daoNivelParametro->FillComboBox("Color");
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
        $daoNivelParametro = new DaoNParametro();
        $rutas = explode("/", $_GET["cmd"]);
        if (isset($_POST["btnActualizar"]) && isset($_FILES['txtImagen']) && isset($rutas[2])) {

            $nombreImagen = $_FILES['txtImagen']['name'];
            $tamImagen = $_FILES['txtImagen']['size'];
            $tmp_name = $_FILES['txtImagen']['tmp_name'];
            $error = $_FILES['txtImagen']['error'];

            if ($error === 0) {
                if ($tamImagen > 125000) {

                    $rst = $daoNivelParametro->FillComboBox("Color");
                    $em = "Tu archivo es muy grande.";
                    require("view/frmRopa.php");
                } else {

                    $imagen_extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
                    $imagen_extension_lc = strtolower($imagen_extension);

                    $imagenPermitida = array('png', 'jpg', 'jpeg', 'webp');

                    if (in_array($imagen_extension, $imagenPermitida)) {
                        $nombreNuevaImagen = uniqid('img', true) . "." . $imagen_extension_lc;
                        $imagen_subida = "view/img/" . $nombreNuevaImagen;
                        move_uploaded_file($tmp_name, $imagen_subida);

                        $id = $rutas[2];
                        $ropa = new Ropa();
                        $ropa->setId($id);
                        $ropa->setPrenda($_POST["txtPrenda"]);
                        $ropa->setStock($_POST["txtStock"]);
                        $ropa->setPrecio($_POST["txtPrecio"]);
                        $ropa->setTalla($_POST["txtTalla"]);
                        $ropa->setEstado($_POST["txtEstado"]);
                        $ropa->setImagen($nombreNuevaImagen);

                        $rst = $daoNivelParametro->FindIdComboBox($_POST["txtColor"]);
                        $ropa->setColor($rst->id);

                        $daoRopa = new DaoRopa();
                        $daoRopa->Update($ropa);
                        $this->inicio();
                    }
                }
            }
        } else {

            $daoR = new DaoRopa();
            $rst = $daoR->Select($rutas[2]);
            $rstColor = $daoNivelParametro->FillComboBox("Color");
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
