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
      $sql = "SELECT c.id, nombres, apellidos, np.descripcion, direccion, telefono, correo, c.estado FROM cliente c
      JOIN persona p ON c.idPersona = p.id
      JOIN nivel_parametro np ON p.idGenero = np.id
      WHERE c.id=?;";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $cliente);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT c.id, nombres, apellidos, np.descripcion, direccion, telefono, correo, c.estado FROM cliente c
      JOIN persona p ON c.idPersona = p.id
      JOIN nivel_parametro np ON p.idGenero = np.id
      ORDER BY c.id;";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }

  public function Insert($cliente)
  {

    $sql = "INSERT INTO persona (nombres, apellidos, direccion,telefono, correo, estado, idGenero) VALUES (?,?,?,?,?,?,?);
    set @idPersona = last_insert_id();
    INSERT INTO cliente (estado, idPersona) VALUES (?,@idPersona)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $cliente->getNombres());
    $tabla->bindValue(2, $cliente->getApellidos());
    $tabla->bindValue(3, $cliente->getDireccion());
    $tabla->bindValue(4, $cliente->getTelefono());
    $tabla->bindValue(5, $cliente->getCorreo());
    $tabla->bindValue(6, $cliente->getEstado());
    $tabla->bindValue(7, $cliente->getGenero());
    $tabla->bindValue(8, $cliente->getEstado());
    $tabla->execute();
  }

  public function Update($cliente)
  {
    $sql = "UPDATE cliente c
    JOIN persona p on c.idPersona = p.id
    SET nombres=?, apellidos=?, direccion=?, telefono=?, correo=?, p.estado=?, idGenero=?, c.estado=? WHERE c.id=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $cliente->getNombres());
    $tabla->bindValue(2, $cliente->getApellidos());
    $tabla->bindValue(3, $cliente->getDireccion());
    $tabla->bindValue(4, $cliente->getTelefono());
    $tabla->bindValue(5, $cliente->getCorreo());
    $tabla->bindValue(6, $cliente->getEstado());
    $tabla->bindValue(7, $cliente->getGenero());
    $tabla->bindValue(8, $cliente->getEstado());
    $tabla->bindValue(9, $cliente->getIdcliente());
    $tabla->execute();
  }

  public function Delete($idcliente = 0)
  {
    $sql = "DELETE cliente, persona
    FROM cliente 
    JOIN persona on cliente.idPersona = persona.id WHERE cliente.id=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $idcliente);
    $tabla->execute();
  }

}
