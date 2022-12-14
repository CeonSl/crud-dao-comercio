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
      $sql = "SELECT * FROM nparametro WHERE idnparametro=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $idnparametro);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM nparametro ORDER BY 2,3 ";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }

  public function Insert($nparametro)
  {
    $sql = "INSERT INTO nparametro (descripcion, tipo, estado) VALUES (?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $nparametro->getDescripcion());
    $tabla->bindValue(2, $nparametro->getTipo());
    $tabla->bindValue(3, $nparametro->getEstado());
    $tabla->execute();
  }

  public function Update($nparametro)
  {
    $sql = "UPDATE nparametro SET descripcion=?, tipo=?, estado=? WHERE idnparametro=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $nparametro->getDescripcion());
    $tabla->bindValue(2, $nparametro->getTipo());
    $tabla->bindValue(3, $nparametro->getEstado());
    $tabla->bindValue(4, $nparametro->getIdnparametro());
    $tabla->execute();
  }

  public function Delete($idnparametro = 0)
  {
    $sql = "DELETE FROM nparametro WHERE idnparametro=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $idnparametro);
    $tabla->execute();
  }
}
