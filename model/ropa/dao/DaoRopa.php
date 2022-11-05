<?php
include_once("model/Conexion.php");
class DaoRopa
{
  public $base;

  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($id = 0)
  {
    if ($id > 0) {
      // Un solo registro
      $sql = "SELECT r.*, np.descripcion FROM ropa r
      JOIN nivel_parametro np on r.idTipoColor = np.id
      WHERE r.id=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $id);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT r.*, np.descripcion FROM ropa r
      JOIN nivel_parametro np on r.idTipoColor = np.id
      ORDER BY id";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }
  public function Insert($ropa)
  {
    $sql = "INSERT INTO ropa(stock, precio, talla, estado, idTipoColor, prenda, imagenRef) VALUES (?,?,?,?,?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $ropa->getStock());
    $tabla->bindValue(2, $ropa->getPrecio());
    $tabla->bindValue(3, $ropa->getTalla());
    $tabla->bindValue(4, $ropa->getEstado());
    $tabla->bindValue(5, $ropa->getColor());
    $tabla->bindValue(6, $ropa->getPrenda());
    $tabla->bindValue(7, $ropa->getImagen());
    $tabla->execute();
  }

  public function Update($ropa)
  {
    $sql = "UPDATE ropa SET stock=?, precio=?, talla=?, estado=?, idTipoColor=?, prenda=?, imagenRef=? WHERE id=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $ropa->getStock());
    $tabla->bindValue(2, $ropa->getPrecio());
    $tabla->bindValue(3, $ropa->getTalla());
    $tabla->bindValue(4, $ropa->getEstado());
    $tabla->bindValue(5, $ropa->getColor());
    $tabla->bindValue(6, $ropa->getPrenda());
    $tabla->bindValue(7, $ropa->getImagen());
    $tabla->bindValue(8, $ropa->getId());
    $tabla->execute();
  }
  public function Delete($id = 0)
  {
    $sql = "DELETE FROM ropa WHERE id=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $id);
    $tabla->execute();
  }
}
