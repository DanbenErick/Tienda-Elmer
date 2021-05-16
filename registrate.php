<?php

session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrate | Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos-registrate.css">
</head>
<body>
  <?php require_once("templates/nav.inc.php");?>

  <section>
    <div class="formulario">
      
      <h1>Registrate</h1>
      <div class="form-container">
        <form action="php/registrar.php" method="POST">
          <div class="input-group">
            <label for="">Nombre Completo</label>
            <input type="text" name="nombre">
          </div>
          <div class="input-group">
            <label for="">Correo Electronico</label>
            <input type="email" name="correo">
          </div>
          <div class="input-group">
            <label for="">Usuario</label>
            <input type="text" name="usuario">
          </div>
          <div class="input-group">
            <label for="">Direccion de Domicilio</label>
            <input type="text" name="direccion">
          </div>
          <div class="input-group">
            <label for="">Contraseña</label>
            <input type="password" name="password">
          </div>
          <div class="input-group">
            <label for="">Repite Contraseña</label>
            <input type="password" name="rep_password">
          </div>
          <div class="input-group">
            <button type="submit">Registrar Cuenta</button>
          </div>
        </form>
      </div>
      <p style="display: none; color: red;" id="valoresVacios">No rellenaste todos los datos</p>
      <p style="display: none; color: red;" id="invalidPassword">Las contraseñas no coinciden</p>
    </div>
  </section>
  <?php if(@$_GET['error']):?>
    <script>
      const error = "<?= $_GET['error']?>"
      error == "empty" 
        ? 
        valoresVacios.style.display = "block"
        :
        invalidPassword.style.display = "block"
    </script>
  <?php endif;?>
</body>
</html>