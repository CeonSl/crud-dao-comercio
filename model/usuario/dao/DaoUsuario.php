<?php
include_once("model/Conexion.php");
class DaoUsuario
{
  public $base;

  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($usuario = "")
  {
    if ($usuario != "") {
      // Un solo registro
      $sql = "SELECT p.nombres, p.apellidos, npG.descripcion as genero,
      p.direccion, p.telefono, p.correo, u.usuario, ru.passw,u.fechaCreacion, np.descripcion as tipoUsuario , u.estado 
      from usuario u 
      join persona p on u.idPersonaUsuario = p.id
      join nivel_parametro np on u.idNivelUsuario = np.id
      join nivel_parametro npG on p.idGenero = npG.id
      join registro_usuario ru on u.usuario = ru.usuario
      where u.usuario = ?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $usuario);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT p.nombres, p.apellidos, npG.descripcion as genero,
      p.direccion, p.telefono, p.correo, u.usuario, ru.passw,u.fechaCreacion, np.descripcion as tipoUsuario , u.estado 
      from usuario u 
      join persona p on u.idPersonaUsuario = p.id
      join nivel_parametro np on u.idNivelUsuario = np.id
      join nivel_parametro npG on p.idGenero = npG.id
      join registro_usuario ru on u.usuario = ru.usuario
      order by u.usuario;";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }
  public function Insert($usuario)
  {
    $sql = "INSERT INTO persona (nombres, apellidos, direccion,telefono, correo, estado, idGenero) VALUES (?,?,?,?,?,?,?);
    SET @idPersona = last_insert_id();
    INSERT INTO  usuario (usuario, fechacreacion, estado, idNivelUsuario, idPersonaUsuario) VALUES (?,?,?,?,@idPersona);
    INSERT INTO  registro_usuario (correo, passw, estado, usuario) VALUES (?,?,?,?);";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $usuario->getNombres());
    $tabla->bindValue(2, $usuario->getApellidos());
    $tabla->bindValue(3, $usuario->getDireccion());
    $tabla->bindValue(4, $usuario->getTelefono());
    $tabla->bindValue(5, $usuario->getCorreo());
    $tabla->bindValue(6, $usuario->getEstado());
    $tabla->bindValue(7, $usuario->getGenero());
    $tabla->bindValue(8, $usuario->getUsuario());
    $tabla->bindValue(9, $usuario->getFechaCreacion());
    $tabla->bindValue(10, $usuario->getEstado());
    $tabla->bindValue(11, $usuario->getTipoUsuario());
    $tabla->bindValue(12, $usuario->getCorreo());
    $tabla->bindValue(13, $usuario->getPassw());
    $tabla->bindValue(14, $usuario->getEstado());
    $tabla->bindValue(15, $usuario->getUsuario());
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

  public function FillType()
  {
    $sql = "SELECT id,descripcion FROM nivel_parametro WHERE tipo = 'Nivel Usuario';";
    $tabla = $this->base->query($sql);
    $tabla->execute();
    $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    return $resultado;
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
}
