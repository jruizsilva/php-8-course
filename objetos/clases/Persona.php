<?php

class Persona
{
  public $nombre;
  public $apellido1;
  public $apellido2;
  public $edad;

  public function setNombre($nombre)
  {
    $this->nombre = strtolower(trim($nombre));
  }

  public function getNombre()
  {
    return ucfirst($this->nombre);
  }
  public function setApellidos(...$apellidos)
  {
    $this->apellido1 = $apellidos[0];
    $this->apellido2 = $apellidos[1];
  }
  public function getApellidos()
  {
    return $this->apellido1 . " " . $this->apellido2;
  }
}

class Argentino extends Persona
{
  public $ciudad;

  public function setApellidos(...$apellidos)
  {
    $this->apellido2 = $apellidos[0];
    $this->apellido1 = $apellidos[1];
  }
}
class Chileno extends Persona
{
  public $provincia;

  public function setApellidos(...$apellidos)
  {
    parent::setApellidos(...$apellidos);
    echo "Asignacion apellidos <br/>";
  }

}