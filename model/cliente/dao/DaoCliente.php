<?php
include_once("model/Conexion.php");
class DaoCliente
{
  public $base;

  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($cliente = 0)
  {
    if ($cliente > 0) {
      // Un solo registro
      $sql = "SELECT * FROM cliente WHERE idcliente=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $cliente);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM cliente ORDER BY 2,3 ";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }

  public function Insert($cliente)
  {
    $sql = "INSERT INTO cliente(nombres, apellidos, direccion, telefono, correo, estado) VALUES (?,?,?,?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $cliente->getNombres());
    $tabla->bindValue(2, $cliente->getApellidos());
    $tabla->bindValue(3, $cliente->getDireccion());
    $tabla->bindValue(4, $cliente->getTelefono());
    $tabla->bindValue(5, $cliente->getCorreo());
    $tabla->bindValue(6, $cliente->getEstado());
    $tabla->execute();
  }

  public function Update($cliente)
  {
    $sql = "UPDATE cliente SET nombres=?, apellidos=?, direccion=?, telefono=?, correo=?, estado=? WHERE idcliente=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $cliente->getNombres());
    $tabla->bindValue(2, $cliente->getApellidos());
    $tabla->bindValue(3, $cliente->getDireccion());
    $tabla->bindValue(4, $cliente->getTelefono());
    $tabla->bindValue(5, $cliente->getCorreo());
    $tabla->bindValue(6, $cliente->getEstado());
    $tabla->bindValue(7, $cliente->getIdcliente());
    $tabla->execute();
  }

  public function Delete($idcliente = 0)
  {
    $sql = "DELETE FROM cliente WHERE idcliente=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $idcliente);
    $tabla->execute();
  }
}
