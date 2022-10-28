<?php

class NParametro
{
  public $idnparametro;
  public $descripcion;
  public $tipo;
  public $estado;

  // Getters y Setters

  public function getIdnparametro()
  {
    return $this->idnparametro;
  }

  public function setIdnparametro($idnparametro)
  {
    $this->idnparametro = $idnparametro;

    return $this;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;

    return $this;
  }
 
  public function getTipo()
  {
    return $this->tipo;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;

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
