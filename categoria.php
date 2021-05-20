<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Categoria | Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos-ingresar.css">
</head>
<body>
  <?php require_once("templates/nav.inc.php"); ?>
  <section>
    <div class="formulario">
      <h1>Agregar Categoria</h1>
      <div class="form-container">
        <form action="php/crear_categoria.php" method="POST">
          <div class="input-group">
            <label for="">Nombre</label>
            <input type="text" name="categoria">
          </div>
          <div class="input-group">
            <button type="submit">Crear Categoria</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php if(@$_GET['mensaje']):?>
    <script>
      const mensaje = "<?= $_GET['mensaje']?>"

      switch(mensaje) {
        case 'create_success':
          alert("Se creo correctamente la categoria")
          break;
        case 'create_fail':
          alert("Ocurrio un error al crear la categoria")
          break;
      }
    </script>
  <?php endif;?>
</body>
</body>
</html>