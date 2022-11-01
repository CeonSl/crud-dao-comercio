<?php

class Usuario
{

  private $nombres;
  private $apellidos;
  private $genero;
  private $direccion;
  private $telefono;
  private $correo;
  private $usuario;
  private $passw;
  private $fechaCreacion;
  private $tipoUsuario;
  private $estado;

  
  

  /**
   * Get the value of nombres
   */ 
  public function getNombres()
  {
    return $this->nombres;
  }

  /**
   * Set the value of nombres
   *
   * @return  self
   */ 
  public function setNombres($nombres)
  {
    $this->nombres = $nombres;

    return $this;
  }

  /**
   * Get the value of apellidos
   */ 
  public function getApellidos()
  {
    return $this->apellidos;
  }

  /**
   * Set the value of apellidos
   *
   * @return  self
   */ 
  public function setApellidos($apellidos)
  {
    $this->apellidos = $apellidos;

    return $this;
  }

  /**
   * Get the value of genero
   */ 
  public function getGenero()
  {
    return $this->genero;
  }

  /**
   * Set the value of genero
   *
   * @return  self
   */ 
  public function setGenero($genero)
  {
    $this->genero = $genero;

    return $this;
  }

  /**
   * Get the value of direccion
   */ 
  public function getDireccion()
  {
    return $this->direccion;
  }

  /**
   * Set the value of direccion
   *
   * @return  self
   */ 
  public function setDireccion($direccion)
  {
    $this->direccion = $direccion;

    return $this;
  }

  /**
   * Get the value of telefono
   */ 
  public function getTelefono()
  {
    return $this->telefono;
  }

  /**
   * Set the value of telefono
   *
   * @return  self
   */ 
  public function setTelefono($telefono)
  {
    $this->telefono = $telefono;

    return $this;
  }

  /**
   * Get the value of correo
   */ 
  public function getCorreo()
  {
    return $this->correo;
  }

  /**
   * Set the value of correo
   *
   * @return  self
   */ 
  public function setCorreo($correo)
  {
    $this->correo = $correo;

    return $this;
  }

  /**
   * Get the value of usuario
   */ 
  public function getUsuario()
  {
    return $this->usuario;
  }

  /**
   * Set the value of usuario
   *
   * @return  self
   */ 
  public function setUsuario($usuario)
  {
    $this->usuario = $usuario;

    return $this;
  }

  /**
   * Get the value of passw
   */ 
  public function getPassw()
  {
    return $this->passw;
  }

  /**
   * Set the value of passw
   *
   * @return  self
   */ 
  public function setPassw($passw)
  {
    $this->passw = $passw;

    return $this;
  }

  /**
   * Get the value of fechaCreacion
   */ 
  public function getFechaCreacion()
  {
    return $this->fechaCreacion;
  }

  /**
   * Set the value of fechaCreacion
   *
   * @return  self
   */ 
  public function setFechaCreacion($fechaCreacion)
  {
    $this->fechaCreacion = $fechaCreacion;

    return $this;
  }

  /**
   * Get the value of tipoUsuario
   */ 
  public function getTipoUsuario()
  {
    return $this->tipoUsuario;
  }

  /**
   * Set the value of tipoUsuario
   *
   * @return  self
   */ 
  public function setTipoUsuario($tipoUsuario)
  {
    $this->tipoUsuario = $tipoUsuario;

    return $this;
  }

 

  /**
   * Get the value of estado
   */ 
  public function getEstado()
  {
    return $this->estado;
  }

  /**
   * Set the value of estado
   *
   * @return  self
   */ 
  public function setEstado($estado)
  {
    $this->estado = $estado;

    return $this;
  }
}
