<?php
include_once("model/Conexion.php");
class DaoRopa
{
  public $base;

  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($idropa = 0)
  {
    if ($idropa > 0) {
      // Un solo registro
      $sql = "SELECT * FROM ropa WHERE idropa=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $idropa);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM ropa ORDER BY 2,3 ";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }
  public function Insert($ropa)
  {
    $sql = "INSERT INTO ropa(stock, precio, talla, estado, color) VALUES (?,?,?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $ropa->getStock());
    $tabla->bindValue(2, $ropa->getPrecio());
    $tabla->bindValue(3, $ropa->getTalla());
    $tabla->bindValue(4, $ropa->getEstado());
    $tabla->bindValue(5, $ropa->getColor());
    $tabla->execute();
  }

  public function Update($ropa)
  {
    $sql = "UPDATE ropa SET stock=?, precio=?, talla=?, estado=?, color=? WHERE idropa=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $ropa->getStock());
    $tabla->bindValue(2, $ropa->getPrecio());
    $tabla->bindValue(3, $ropa->getTalla());
    $tabla->bindValue(4, $ropa->getEstado());
    $tabla->bindValue(5, $ropa->getColor());
    $tabla->bindValue(6, $ropa->getIdropa());
    $tabla->execute();
  }
  public function Delete($idropa = 0)
  {
    $sql = "DELETE FROM ropa WHERE idropa=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $idropa);
    $tabla->execute();
  }
}
