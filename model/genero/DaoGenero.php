<?php


class DaoGenero
{

  public $base;

  public function __construct()
  {
    $this->base = Conexion::conectar();
  }
  
  public function FillGenre($tipo)
  {
    $sql = "SELECT id,descripcion FROM nivel_parametro WHERE tipo = '$tipo';";
    $tabla = $this->base->query($sql);
    $tabla->execute();
    $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    return $resultado;
  }

  public function FindIdGenre($tipo)
  {
    $sql = "SELECT id FROM nivel_parametro WHERE descripcion = ?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindParam(1, $tipo);
    $tabla->execute();
    $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    return $resultado;
  }
}
