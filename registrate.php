<!DOCTYPE html>
<html lang="en">
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
        <form action="">
          <div class="input-group">
            <label for="">Nombre Completo</label>
            <input type="text">
          </div>
          <div class="input-group">
            <label for="">Correo Electronico</label>
            <input type="email">
          </div>
          <div class="input-group">
            <label for="">Usuario</label>
            <input type="text">
          </div>
          <div class="input-group">
            <label for="">Contraseña</label>
            <input type="password">
          </div>
          <div class="input-group">
            <label for="">Repite Contraseña</label>
            <input type="password">
          </div>
          <div class="input-group">
            <button type="submit">Ingresar</button>
          </div>
        </form>
      </div>
      <p>No tienes cuenta registrate <a href="registrarse.php">aqui</a></p>
    </div>
  </section>
</body>
</html>