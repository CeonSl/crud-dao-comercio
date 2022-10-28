<?php

class Usuario
{

  private $idusuario;
  private $contraseña;
  private $correo;
  private $fechacreacion;
  private $estado;

  // Getters y Setters

  public function getIdusuario()
  {
    return $this->idusuario;
  }

  public function setIdusuario($idusuario)
  {
    $this->idusuario = $idusuario;
  }

  public function getContraseña()
  {
    return $this->contraseña;
  }

  public function setContraseña($contraseña)
  {
    $this->contraseña = $contraseña;
  }

  public function getCorreo()
  {
    return $this->correo;
  }

  public function setCorreo($correo)
  {
    $this->correo = $correo;
  }

  public function getFechacreacion()
  {
    return $this->fechacreacion;
  }

  public function setFechacreacion($fechacreacion)
  {
    $this->fechacreacion = $fechacreacion;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setEstado($estado)
  {
    $this->estado = $estado;
  }
}
