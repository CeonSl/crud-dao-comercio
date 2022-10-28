<?php
include_once("configDB.php");
class Conexion
{

  public static function conectar()
  {
    $h = HOST;
    $u = USER;
    $p = PASSWORD;
    $d = DATABASE;

    try {
      $conn = new PDO("mysql:host=$h;dbname=$d", $u, $p);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch (PDOException $e) {
      die("Connection failed: " . $e->getMessage());
    }

    return $conn;
  }
}
