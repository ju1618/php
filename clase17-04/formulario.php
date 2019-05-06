<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
  </head>
  <body>
    <form class="" action="imprimir.php" method="post">
      <label for="nombre">Nombre: </label>
      <input type="text" name="nombre" id="nombre">
      <br>
      <label for="email">email: </label>
      <input type="email" name="email" id="email">
      <br><br>
      <label for="hobbies">Indicá tus hobbies</label>
      <p>
        <input type="checkbox" name="hobbies[]" value="deporte">Deporte
        <input type="checkbox" name="hobbies[]" value="pintura">Pintura
        <input type="checkbox" name="hobbies[]" value="musica">Musica
        <input type="checkbox" name="hobbies[]" value="actuar">Actuar
      </p>
            <br><br>
      <label for="estadoCivil">Estado Civil</label>
      <p>
        <input type="radio" name="estadoCivil" value="soltere">Soltere
        <input type="radio" name="estadoCivil" value="casade">Casade
        <input type="radio" name="estadoCivil" value="viude">Viude
        <input type="radio" name="estadoCivil" value="concu">En concubinato
      </p>
      <br><br>
      <label for="pais">Pais de nacimiento</label>
      <select name="nacionalidad">
        <p>
         <option selected value="">Seleccionar una opción</option>
         <option value="arg">Argentina</option>
         <option value="br">Brasil</option>
         <option value="ch">Chile</option>
         <option value="per">Perú</option>
        </p>
      </select>
      <br><br>
      <button type="submit" name="button">Enviar</button>
    </form>

  </body>
</html>
