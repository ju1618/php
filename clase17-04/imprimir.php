<?php

// Ejercicio 1
// ------------------------- GET--------------------------------------
echo "<strong>GET</strong>";
echo "<br><br>";
var_dump($_GET);
echo $_GET["nombre"];
echo "<br>";
echo $_GET["email"];
echo "<br><br>";


//------------------------- POST--------------------------------------
echo "<strong>POST</strong>";
echo "<br><br>";
var_dump($_POST);
echo "<br><br>";

echo "<strong>GET ALL HEADERS</strong>";
echo "<br><br>";
var_dump(getallheaders());
foreach(getallheaders() as $key => $value) {
  echo "$key : $value <br>";
}
echo "<br><br>";
var_dump($_SERVER);
echo "<br>";
var_dump($_FILES);
echo "<br>";
var_dump($_REQUEST);
echo "<br>";
var_dump($_SESSION);
echo "<br>";
var_dump($_COOKIE);
echo "<br>";
var_dump($GLOBALS);



?>
