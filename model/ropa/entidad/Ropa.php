<?php

class Ropa
{

  private $idropa;
  private $stock;
  private $precio;
  private $talla;
  private $estado;
  private $color;
  
  public function getIdropa()
  {
    return $this->idropa;
  }

  public function setIdropa($idropa)
  {
    $this->idropa = $idropa;

    return $this;
  }

  public function getStock()
  {
    return $this->stock;
  }

  public function setStock($stock)
  {
    $this->stock = $stock;

    return $this;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function setPrecio($precio)
  {
    $this->precio = $precio;

    return $this;
  }

  public function getTalla()
  {
    return $this->talla;
  }

  public function setTalla($talla)
  {
    $this->talla = $talla;

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

  public function getColor()
  {
    return $this->color;
  }

  public function setColor($color)
  {
    $this->color = $color;

    return $this;
  }
}
