<?php

class Envio
{

  private $idenvio;
  private $fecha;
  private $estado;

  // Getters y Setters

  public function getIdenvio()
  {
    return $this->idenvio;
  }

  public function setIdenvio($idenvio)
  {
    $this->idenvio = $idenvio;

    return $this;
  }

  public function getFecha()
  {
    return $this->fecha;
  }

  public function setFecha($fecha)
  {
    $this->fecha = $fecha;

    return $this;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setEstado($estado)
  {
    $this->estado = $estado;

    return $this;
  }

}
