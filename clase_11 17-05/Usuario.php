<?php

abstract class Usuario
{
  protected $nombreCompleto;
  protected $fechaDeNac;
  protected $email;
  protected $documento;
  protected $paisNac;
  protected $edad;

  public function __construct($unNombreYApellido, string $unaFechaNac){

  }
// inicio de setters y getters ----------------------
  public function setNombre($unNombre){
    $this->nombreCompleto = $unNombre;
  }

  public function getNombre(){
    return $this->$nombreCompleto;
  }

  public function setFechaNacimiento(string $unaFecha){
    $this->fechaDeNac = $unaFecha;
  }

  public function getFechaNacimiento(){
    return $this->fechaDeNac;
  }

  public function setEmail($unEmail){
    $this->email = $unEmail;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setDocumento(int $unDNI){
    $this->documento = $unDNI;
  }

  public function getDocumento(){
    return $this->documento;
  }

  public function setPais($unPais){
    $this->paisDeNac = $unPais;
  }

  public function getDocumento(){
    return $this->paisDeNac;
  }

  public function setEdad($fechaDeNac){
      // hay que ver como ganchos calculo la edad


    $this->edad = $unaEdad;
  }

  public function getEdad(){
    return $this->edad;
  }
// FIN de setters y getters ----------------------

}
