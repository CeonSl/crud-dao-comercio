<?php
include_once("model/Conexion.php");
class DaoEnvio
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
      $sql = "SELECT * FROM envio WHERE idenvio=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $id);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM envio ORDER BY 2,3 ";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }
  public function Insert($envio)
  {
    $sql = "INSERT INTO envio(fecha, estado) VALUES (?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $envio->getFecha());
    $tabla->bindValue(2, $envio->getEstado());
    $tabla->execute();
  }

  public function Update($envio)
  {
    $sql = "UPDATE envio SET fecha=?, estado=? WHERE idenvio=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $envio->getFecha());
    $tabla->bindValue(2, $envio->getEstado());
    $tabla->bindValue(3, $envio->getIdenvio());
    $tabla->execute();
  }
  public function Delete($idenvio = 0)
  {
    $sql = "DELETE FROM envio WHERE idenvio=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $idenvio);
    $tabla->execute();
  }
}
