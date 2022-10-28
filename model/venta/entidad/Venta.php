<?php

class Venta
{

  private $idventa;
  private $idcliente;
  private $idropa;
  private $cantidad;
  private $precio;
  private $fecha;
  private $total;
  private $estado;

  // Getters y Setters

  public function getIdventa()
  {
    return $this->idventa;
  }

  public function setIdventa($idventa)
  {
    $this->idventa = $idventa;
  }

  public function getIdcliente()
  {
    return $this->idcliente;
  }

  public function setIdcliente($idcliente)
  {
    $this->idcliente = $idcliente;
  }

  public function getIdropa()
  {
    return $this->idropa;
  }

  public function setIdropa($idropa)
  {
    $this->idropa = $idropa;
  }

  public function getCantidad()
  {
    return $this->cantidad;
  }

  public function setCantidad($cantidad)
  {
    $this->cantidad = $cantidad;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function setPrecio($precio)
  {
    $this->precio = $precio;
  }

  public function getFecha()
  {
    return $this->fecha;
  }

  public function setFecha($fecha)
  {
    $this->fecha = $fecha;
  }

  public function getTotal()
  {
    return $this->total;
  }

  public function setTotal($total)
  {
    $this->total = $total;
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
