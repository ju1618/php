<?php

if($_POST) {
  //Valido que los campos obligatorios no me lleguen vacios
  if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["pais"]) || empty($_POST["password"]) ) {
    //si es así, redirecciono al usuario a la página de registro
    header('Location: register.php');
  }
  $nombre = $_POST["name"];
  $pais = $_POST["pais"];
  $email = $_POST["email"];

  if(isset($_POST["pasatiempos"])) {
    $pasatiempos = $_POST["pasatiempos"];

  if(isset($_POST["hobbies"])) {
    $hobbies = $_POST["hobbies"];
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <title>Perfil de <?= $nombre ?> </title>
</head>
<body>

  <div class="bienvenida">
    <p>Muchas Gracias por registrarte <mark><em><?= $nombre ?>.</em></mark></p>
    <p>Nos has dicho que tu país de nacimiento es <mark><em><?= $pais ?>.</em></mark></p>
    <p>Hemos registrado tu email: <mark><em><?= $email ?>.</em></mark></p>
    <?php if(isset($pasatiempos)) :?>
      <p>Tus pasatiempos son: <mark><em><?= implode(", " , $pasatiempos); ?>.</em></mark></p>
=======
  <!-- <title>Perfil de <?= $nombre ?> </title> -->
</head>
<body>

  <div class="bienvenide">
    <p>Muchas Gracias por registrarte <mark><em><?= $nombre ?>.</em></mark></p>
    <p>Nos has dicho que tu país de nacimiento es <mark><em><?= $pais ?>.</em></mark></p>
    <p>Hemos registrado tu email: <mark><em><?= $email ?>.</em></mark></p>
    <?php if(isset($hobbies)) :?>
      <p>Tus pasatiempos son: <mark><em><?= implode(", " , $hobbies); ?>.</em></mark></p>
>>>>>>> e6960f0db91da2fcc21f26021247b8c870eac594
    <?php else : ?>
      <p><em>No has especificado tus pasatiempos.</em></p>
    <?php endif; ?>
    <em>Gracias!</em>
  </div>

</body>
</html>
