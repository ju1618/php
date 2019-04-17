<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     $numeroMagico=1.61803399;
    echo "<br>";
    echo "<h3>Ejercicio 1 </h3>";

    echo "<h2>punto a</h2>";

    echo "<br><br>";
        function mayor($numUno, $numDos, $numTres){
        $mayor;
        if($numUno>$numDos && $numUno>$numTres){
          $mayor=$numUno;
          $pos=1;
        }elseif ($numDos>$numUno && $numDos>$numTres){
          $mayor=$numDos;
          $pos=2;
        }elseif ($numTres>$numUno && $numTres>$numDos) {
          $mayor=$numTres;
          $pos=3;
        }
        return "El numero mayor es $mayor y su posicion es: $pos °";
      }
       echo mayor(3,89,0);
       echo "<hr>";
       echo "<br>";

      echo "<h2>punto b</h2>";

       echo "<br><br>";
       function tabla($base,$limite){
         for ($i=$base; $i <= $limite ; $i++) {
           echo $i;
           echo "<br>";
         }
       }

       tabla(0,10);
       echo "<hr>";
       echo "<br>";

      echo "<h2>punto c</h2>";

       echo "<br><br>";
       echo"Numero Magico";
       echo "<hr>";
       echo "<br>";

      echo "<h2>punto d</h2>";

       echo "<br><br>";

      echo mayor(1,2,$numeroMagico);

     ?>
  </body>
</html>
