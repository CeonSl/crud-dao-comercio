<?php
include_once("model/Conexion.php");
class DaoVenta
{
  public $base;

  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($idventa = 0)
  {
    if ($idventa > 0) {
      // Un solo registro
      $sql = "SELECT * FROM venta WHERE idventa=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $idventa);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM venta ORDER BY 2,3 ";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }

  public function Insert($venta)
  {
    $sql = "INSERT INTO venta (idventa,idcliente, idropa, cantidad, precio, fecha, total, estado) VALUES (?,?,?,?,?,?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $venta->getIdventa());
    $tabla->bindValue(2, $venta->getIdcliente());
    $tabla->bindValue(3, $venta->getIdropa());
    $tabla->bindValue(4, $venta->getCantidad());
    $tabla->bindValue(5, $venta->getPrecio());
    $tabla->bindValue(6, $venta->getFecha());
    $tabla->bindValue(7, $venta->getTotal());
    $tabla->bindValue(8, $venta->getEstado());
    $tabla->execute();
  }

  public function Update($venta)
  {
    $sql = "UPDATE venta SET idcliente=?, idropa=?, cantidad=?, precio=?, fecha=?, total=?, estado=? WHERE idventa=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $venta->getIdcliente());
    $tabla->bindValue(2, $venta->getIdropa());
    $tabla->bindValue(3, $venta->getCantidad());
    $tabla->bindValue(4, $venta->getPrecio());
    $tabla->bindValue(5, $venta->getFecha());
    $tabla->bindValue(6, $venta->getTotal());
    $tabla->bindValue(7, $venta->getEstado());
    $tabla->bindValue(8, $venta->getIdventa());
    $tabla->execute();
  }

  public function Delete($idventa = 0)
  {
    $sql = "DELETE FROM venta WHERE idventa=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $idventa);
    $tabla->execute();
  }
}
