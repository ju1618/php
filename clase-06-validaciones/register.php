<?php
  $paises=[
    "Argentina",
    "Brasil",
    "Chile",
    "Perú",
    "Colombia",
    "Bolivia",
    "Venezuela",
    "Uruguay",
    "Paraguay",
    "Otro"
  ]
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>Registrarse</title>
</head>
<body>
   <form method='post' action="confirmation.php">
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo<span class="required">*</span>: </label>
				<input type='text' name='name'>
			</div>

			<div class='form-control'>
				<label for='email' >Email<span class="required">*</span>:</label>
				<input type='text' name='email'>
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario<span class="required">*</span>:</label>
				<input type='text' name='username'>
			</div>

      <?php if( isset($_GET["versionCorta"]) && $_GET["versionCorta"] !== "true") : ?>
             <div class='form-control'>
               <label for='adress'>Dirección:</label>
               <input type='text' name='adress'>
             </div>

      <div class='form-control'>
        <label for='pais'>Nacionalidad<span class="required">*</span>:</label>
        <select name="pais">
          <option value="">seleccionar una opción</option>
          <?php foreach($paises as $pais) : ?>
            <option value="<?= $pais ?>"> <?= $pais ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class='form-control'>
        <label for="hobbies">Indicá tus hobbies<span class="required">*</span>:</label>
        <p>
          <input type="checkbox" name="hobbies[]" value="deporte">Deporte
          <input type="checkbox" name="hobbies[]" value="pintura">Pintura
          <input type="checkbox" name="hobbies[]" value="musica">Musica
          <input type="checkbox" name="hobbies[]" value="actuar">Actuar
        </p>
      </div>

      <!-- si recibo versionCorta no muestro las siguientes opciones -->
      <?php if( isset($_GET["versionCorta"]) && $_GET["versionCorta"] !== "true") : ?>
        <div class='form-control'>
          <label for='password'>Confirmar contraseña<span class="required">*</span>:</label>
          <input type='password' name='rePassword'>
        </div>

        <div class='form-control'>
          <label for='phone' >Telefono de contacto<span class="required">*</span>:</label>
          <input type='text' name='phone'>
        </div>

        <div class='form-control'>
          <label for='address' >Direccion<span class="required">*</span>:</label>
          <input type='text' name='address'>
        </div>
    <?php endif; ?>

			<div class='form-control'>
				<button type="submit" >ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
