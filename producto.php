<?php

  require_once("php/modules/funciones.inc.php");
  $categorias = traer_categorias()["data"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Producto | Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos-ingresar.css">
</head>
<body>
  <?php require_once("templates/nav.inc.php"); ?>
  <section>
    <div class="formulario">
      <h1>Agregar Producto</h1>
      <div class="form-container">
        <form action="php/crear_producto.php" method="POST" enctype="multipart/form-data">
          <div class="input-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre">
          </div>
          <div class="input-group">
            <label for="">Categoria</label>
            <select name="categoria" id="">
              <option value="">Elige una opcion</option>
              <?php foreach($categorias as $categoria):?>
                <option value="<?= $categoria["nombre"]?>"><?= $categoria["nombre"]?></option>
              <?php endforeach;?>
            </select>
          </div>
          <div class="input-group">
            <label for="">Cantidad</label>
            <input type="number" name="cantidad">
          </div>
          <div class="input-group">
            <label for="">Precio</label>
            <input type="number" name="precio">
          </div>
          <div class="input-group">
            <label for="">Imagen</label>
            <input type="file" name="imagen">
          </div>
          
          <div class="input-group">
            <button type="submit">Crear Producto</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php if(@$_GET['mensaje']):?>
    <script>
      const mensaje = "<?= $_GET['mensaje']?>"

      switch(mensaje) {
        case 'not_permited':
          alert("El archivo es grande o no es uno de los formatos permitidos")
          break;
        case 'producto_success':
          alert("Se creo correctamente el producto")
          break;
        case 'fail_register_producto':
          alert("Ocurrio un error al registrar el producto")
          break;
        case 'fail_upload_image':
          alert("No se pudo subir la imagen")
          break;
        case 'empty':
          alert("Rellena todos los datos")
          break;
      }
    </script>
  <?php endif;?>
</body>
</html>