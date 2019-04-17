<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primer práctica php</title>
  </head>
  <body>
    <h1>punto 1</h1>
    <?php
      $numero=2;
      $decimal= 1.618;
      $cadena="hola";
      $cadenados='mundo';

      echo $numero;
      echo"<br>";
      var_dump($numero);
      echo"<br>";
      echo $decimal;
      echo"<br>";
      echo $cadena;
      echo"<br>";
      echo $cadenados;
      echo"<br>";echo"<br>";

      $numero="no soy mas un numero";
      $cadena=3.1416;

      var_dump($numero);
      echo"<br>";
      echo $cadena;
      echo"<br>";echo"<br>";

      $numero="4";

      echo $numero;
     ?>

     <h1>punto 2</h1>
     <br><br>

     <?php
      $uno="Tres";
      $dos="tristes";
      $tres="tigres";

      echo $uno;
      echo"<br>";echo"<br>";
      echo"$uno $dos $tres tragan trigo en un trigal";
      ?>

  </body>
</html>
