<?php

class Cliente
{

  private $idcliente;
  private $nombres;
  private $apellidos;
  private $direccion;
  private $telefono;
  private $correo;
  private $estado;
  private $genero;

  // Getters and Setters

  public function getIdcliente()
  {
    return $this->idcliente;
  }

  public function setIdcliente($idcliente)
  {
    $this->idcliente = $idcliente;
  }

  public function getNombres()
  {
    return $this->nombres;
  }

  public function setNombres($nombres)
  {
    $this->nombres = $nombres;
  }

  public function getApellidos()
  {
    return $this->apellidos;
  }

  public function setApellidos($apellidos)
  {
    $this->apellidos = $apellidos;
  }

  public function getDireccion()
  {
    return $this->direccion;
  }

  public function setDireccion($direccion)
  {
    $this->direccion = $direccion;
  }

  public function getTelefono()
  {
    return $this->telefono;
  }

  public function setTelefono($telefono)
  {
    $this->telefono = $telefono;
  }

  public function getCorreo()
  {
    return $this->correo;
  }

  public function setCorreo($correo)
  {
    $this->correo = $correo;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setEstado($estado)
  {
    $this->estado = $estado;
  }

  public function getGenero()
  {
    return $this->genero;
  }

  public function setGenero($genero)
  {
    $this->genero = $genero;
  }
}
