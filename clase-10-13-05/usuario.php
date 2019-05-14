<?php

class Usuario
{
  private $nombre;
  private $fechaNacimiento;
  private $email;


  function __construct($userName, $fechaNac, $mail)
  {
    $this->nombre = $userName;
    $this->fechaNacimiento = $fechaNac;
    $this->email = $mail;
  }

  public function setEmail($mail){
    $this->email = $mail;
  }

  public function getEmail(){
    return $this->email;
  }
}

 ?>
