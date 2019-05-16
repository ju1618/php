<?php
require_once 'usuario.php';
$user1= new Usuario("Romi", "3/2", "ro@mi.com", "123");

echo "<pre>";
var_dump($user1);
echo "</pre>";


$user2 = new Usuario("Fede", "25/4", "fe@de.com", "345");

echo "<pre>";
var_dump($user2);
echo "</pre>";

$user1->saludar($user1); /*esto es para poder acceder a las funciones publicas (metodos) de la clase, tengo que acceder via instancia*/



 ?>
