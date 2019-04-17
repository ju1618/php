<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<br>";
    echo "<h3>Ejercicio 1 </h3>";

    echo "<br><br>";
    $numeroUno=1;
    $numeroDos=2;

    if($numeroUno > $numeroDos){
      echo "el numero mayor es $numeroUno";
    }else{
      echo "el numero mayor es $numeroDos";
    }

      echo "<hr>";
      echo "<br>";
      echo "<h3>Ejercicio 2 </h3>";

      echo "<br><br>";

      $aleatorio = rand(1,5);

      if($aleatorio==3 || $aleatorio==5){
        echo "$aleatorio";
      }

      echo "<hr>";
      echo "<br>";
      echo "<h3>Ejercicio 3 </h3>";

      echo "<br><br>";

      if($aleatorio!=3){
        echo "La variable NO es 3";
      }else{
        echo "$aleatorio";
      }

      echo "<hr>";
      echo "<br>";

      echo "<h3>Ejercicio 4 </h3>";

      echo "<br><br>";

      $aleatoriodos = rand(1,100);

      if($aleatoriodos > 50){
        echo "Es mayor que 50";
      }else {
        echo "Es manor que 50";
      }

      echo "<hr>";
      echo "<br>";
      echo "<h3>Ejercicio 5 </h3>";

      echo "<br><br>";

      $nombreDeUsusario = "Nombre";
      $ClaveDeUsuario = "567";

      if ($nombreDeUsusario=="admin" && $ClaveDeUsuario=="1234"){
        echo "¡Bienvenido a su cuenta!";
      }else{
        echo "Quitate tú";
      }

      echo "<hr>";
      echo "<br>";

      echo "<h3>Ejercicio 6 </h3>";

      echo "<br><br>";

      $edad=34;
      $casado=false;
      $sexo="masculino";

      if($edad > 18 && !$casado){
        echo "Bienvenide";
      }else if($sexo=="Otro"){
        echo "Bienvenide";
      }

      echo "<hr>";
      echo "<br>";

      echo "<h3>Ejercicio 7 </h3>";

      echo "<br><br>";

      $cantidadDeAlumnos=314;

      if( $cantidadDeAlumnos){
        echo "true";
      }else{
        echo "false";
      }

      echo "<hr>";
      echo "<br>";

      echo "<h3>Ejercicio 8 </h3>";

      echo "<br><br>";

      if ($i=1){
        echo "true";
      }else{
        echo "false";
      }

      echo "<hr>";
      echo "<br>";

      echo "<h3>Ejercicio 9 </h3>";

      echo "<br><br>";

      $numero=45;

      echo $numero%2==0 ? "El número es par" : "El número es impar";

      echo "<hr>";
      echo "<br>";

      echo "<h3>Ejercicio 10 </h3>";

      echo "<br><br>";

      $nombre = "Capi";

      switch ($nombre){
        case "Capi":
          echo "buen dia $nombre";
          break;
        case "Spok":
          echo "saludos $nombre";
          break;
        case "Khal Drogo":
          echo "My moon and stars, $nombre";
          break;
        default:
          echo "nadie a quien saludar";
          break;
      }
      echo "<hr>";
      echo "<br>";

      echo "<h3>Ejercicio 11 </h3>";

      echo "<br><br>";

      $colorRemera="violeta";

      switch ($colorRemera) {
        case 'rojo':
        case 'azul':
        case'amarillo':
          echo "la remera es de color $colorRemera, y es primario";
          break;

        default:
          echo "el color $colorRemera no es primario";
          break;
      }



     ?>
  </body>
</html>
