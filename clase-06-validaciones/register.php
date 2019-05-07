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
<html>
<head>
    <meta charset="utf-8">
    <!-- <title>Contact us</title> -->
	 <style media="screen">
	 	* {
	 		box-sizing: border-box;
	 	}
	 	.form-control {
	 		border: solid 1px #dddddd;
			background-color: #eeeeee;
			padding: 5px;
			margin-bottom: 10px;
	 	}
		.form-control input:not([type=checkbox]) {
			display: block;
			height: 40px;
			width: 100%;
			margin-top: 5px;
			padding: 15px;
			font-size: 1em;
			outline: none;
		}
		.form-control select {
			width: 60%;
			height: 40px;
			font-size: 1em;
			outline: none;
		}
		.form-control button {
			background-color: #24c4d4;
			color: #FFFFFF;
			font-size: 1.2em;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
		}
	 </style>
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

			<div class='form-control'>
				<label for='password'>Contraseña<span class="required">*</span>:</label>
				<input type='password' name='password'>
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

			<div class='form-control'>
				<button type="submit" >ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
