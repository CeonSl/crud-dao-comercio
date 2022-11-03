<?php
include_once("model/Conexion.php");
class DaoNParametro
{
  public $base;

  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($idnparametro = 0)
  {
    if ($idnparametro > 0) {
      // Un solo registro
      $sql = "SELECT * FROM nivel_parametro WHERE id=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $idnparametro);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM nivel_parametro ORDER BY id";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }

  public function Insert($nparametro)
  {
    $sql = "INSERT INTO nivel_parametro (descripcion, tipo, estado) VALUES (?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $nparametro->getDescripcion());
    $tabla->bindValue(2, $nparametro->getTipo());
    $tabla->bindValue(3, $nparametro->getEstado());
    $tabla->execute();
  }

  public function Update($nparametro)
  {
    $sql = "UPDATE nivel_parametro SET descripcion=?, tipo=?, estado=? WHERE id=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $nparametro->getDescripcion());
    $tabla->bindValue(2, $nparametro->getTipo());
    $tabla->bindValue(3, $nparametro->getEstado());
    $tabla->bindValue(4, $nparametro->getIdnparametro());
    $tabla->execute();
  }

  public function Delete($idnparametro = 0)
  {
    $sql = "DELETE FROM nivel_parametro WHERE id=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $idnparametro);
    $tabla->execute();
  }

  public function FindIdType($tipo)
  {
    $sql = "SELECT id FROM nivel_parametro WHERE descripcion = ?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindParam(1, $tipo);
    $tabla->execute();
    $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    return $resultado;
  }



  public function FillComboBox($tipo)
  {
    $sql = "SELECT id,descripcion FROM nivel_parametro WHERE tipo = '$tipo';";
    $tabla = $this->base->query($sql);
    $tabla->execute();
    $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    return $resultado;
  }

  public function FindIdComboBox($tipo)
  {
    $sql = "SELECT id FROM nivel_parametro WHERE descripcion = '$tipo';";
    $tabla = $this->base->query($sql);
    $tabla->execute();
    $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    return $resultado;
  }

}
