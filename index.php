<?php

  session_start();

  require_once("php/modules/funciones.inc.php");

  $productos = traer_productos()["data"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos.css">
  <?php if(@$_SESSION["id"] != ""):?>
  <style>
  .producto:hover {
    cursor: pointer;
  }
  </style>
  <?php endif;?>
</head>
<body>
  <?php
    $active_link = "index";
    require_once("templates/nav.inc.php");
  ?>
  <section>
    <main>
      <h1>Productos</h1>
      <div class="productos">
        <?php foreach($productos as $producto):?>
          <article class="producto" 
            data-id="<?= $producto["id"] ?>" 
            data-nombre="<?= $producto["nombre"]?>" 
            data-imagen="<?= $producto["ruta_imagen"]?>"
            data-precio="<?= $producto["precio"] ?>"
          >
            <img src="<?= $producto["ruta_imagen"]?>" alt="">
            <p><?= $producto["nombre"]?></p>
          </article>
        <?php endforeach;?>
      </div>
    </main>
  </section>
  <?php if(@$_SESSION['id'] != ""):?>
    <script>
      
      const productos = document.querySelectorAll('.producto')
      productos.forEach(producto => {
        producto.addEventListener("click", _ => {
          alert("Añadido al carrito")
          fetch(`anadir-carrito.php?id=${producto.dataset.id}&nombre=${producto.dataset.nombre}&imagen=${producto.dataset.imagen}&precio=${producto.dataset.precio}`)
        })
      })
    </script>
  <?php endif;?>
  <?php if(@$_GET['mensaje']):?>
    <script>
      const mensaje = "<?= $_GET['mensaje']?>"

      switch(mensaje) {
        case 'login_success':
          alert("Ingresaste correctamente a tu cuenta")
          break;
        case 'exit_success':
          alert("Saliste de tu cuenta correctamente")
          break;
      }
    </script>
  <?php endif;?>
</body>
</html>