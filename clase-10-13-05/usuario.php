<?php

class Usuario
{
  private $nombre;
  private $fechaNacimiento;
  private $email;
  private $edad;
  private $contrasenia;


  public function __construct($userName, $fechaNac, $mail, $password)
  {
    $this->setName($userName); /*esto es para que la logica la ponga en el setter y no en el constructor*/
    $this->fechaNacimiento = $fechaNac;
    $this->setEmail($mail);
    $this->setPassword($password);
  }

  public function setEmail(string $mail){
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
      $this->email = $mail;
      return;
    }

    echo "lo que me diste no es un formato valido de email";

  }

  public function getEmail(){
    return $this->email;
  }

  public function setName(string $name){
    $this->nombre = $name;
  }

  public function getName(){
    return $this->nombre;
  }

// edad y no fecha de naciemiento
  public function setAge(int $age){
    $this->edad = $age;
  }

  public function getAge(){
    return $this->edad;
  }

  public function setPassword($password){

    $this->contrasenia = password_hash($password, PASSWORD_DEFAULT);
  }

  public function saludar(Usuario $user){

    echo "Hola $this->nombre";

  }
}

 ?>
