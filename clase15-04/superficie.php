    <?php
    echo "<h2>ejercicio 2</h2>";
    function triangulo($base,$altura){
      return $base*($altura/2);
    }
    function rectangulo($base,$altura){
      return $base*$altura;
    }
    function circulo($radio){
       $pi = 4 * atan(1);
      return $pi*$radio*$radio;
    }
    echo "<br>";
    echo "la sup del triangulo es ";echo triangulo(2,3);
    echo "<br>";
    echo "la sup del rectangulo es ";echo rectangulo(2,3);
    echo "<br>";
    echo "la sup del cuadrado es ";echo triangulo(2,2);
    echo "<br>";
    echo "la superficie del circulo es ";echo circulo(2);




     ?>
