<?php

class Ropa
{

  private $id;
  private $prenda;
  private $stock;
  private $precio;
  private $talla;
  private $estado;
  private $color;
  private $imagen;
  
  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  public function getPrenda()
  {
    return $this->prenda;
  }

  public function setPrenda($prenda)
  {
    $this->prenda = $prenda;

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

  public function getImagen()
  {
    return $this->imagen;
  }

  public function setImagen($imagen)
  {
    $this->imagen = $imagen;

    return $this;
  }
}
