<?php
include_once("model/Conexion.php");
class DaoUsuario
{
  public $base;

  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($idusuario = 0)
  {
    if ($idusuario > 0) {
      // Un solo registro
      $sql = "SELECT * FROM usuario WHERE idusuario=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $idusuario);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM usuario ORDER BY 2,3 ";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }
  public function Insert($usuario)
  {
    $sql = "INSERT INTO  usuario (idusuario,contraseña,correo,fechacreacion,estado) VALUES (?,?,?,?,?)";

    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $usuario->getIdusuario());
    $tabla->bindValue(2, $usuario->getContraseña());
    $tabla->bindValue(3, $usuario->getCorreo());
    $tabla->bindValue(4, $usuario->getFechacreacion());
    $tabla->bindValue(5, $usuario->getEstado());
    $tabla->execute();
  }

  public function Update($usuario)
  {
    $sql = "UPDATE usuario SET contraseña=?,correo=?,fechacreacion=?,estado=? WHERE idusuario=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $usuario->getContraseña());
    $tabla->bindValue(2, $usuario->getCorreo());
    $tabla->bindValue(3, $usuario->getFechacreacion());
    $tabla->bindValue(4, $usuario->getEstado());
    $tabla->bindValue(5, $usuario->getIdusuario());
    $tabla->execute();
  }
  public function Delete($idusuario = 0)
  {
    $sql = "DELETE FROM usuario WHERE idusuario=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $idusuario);
    $tabla->execute();
  }
}
