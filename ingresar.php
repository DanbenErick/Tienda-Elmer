<?php
  session_start();
  if(@$_SESSION["id"] != "") {
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingresar | Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos-ingresar.css">
</head>
<body>
  <?php
    $active_link = "ingresar";
    require_once("templates/nav.inc.php");
  ?>
  <section>
    <div class="formulario">
      <h1>Iniciar Sesion</h1>
      <div class="form-container">
        <form action="php/ingresar.php" method="POST">
          <div class="input-group">
            <label for="">Usuario</label>
            <input type="text" name="usuario">
          </div>
          <div class="input-group">
            <label for="">Contraseña</label>
            <input type="password" name="password">
          </div>
          <div class="input-group">
            <button type="submit">Ingresar</button>
          </div>
        </form>
      </div>
      <p>No tienes cuenta registrate <a href="registrate.php">aqui</a></p>
    </div>
  </section>
  <?php if(@$_GET['mensaje']):?>
    <script>
      const mensaje = "<?= $_GET['mensaje']?>"

      switch(mensaje) {
        case 'exito_registro':
          alert("Se confirmo el registro del usuario")
          break;
      }
    </script>
  <?php endif;?>
</body>
</html>