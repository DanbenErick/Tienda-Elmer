<?php

  require_once("php/modules/funciones.inc.php");

  $producto = traer_producto_por_id($_GET['id'])["data"][0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comprar | Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos-comprar.css">
</head>
<body>
  <?php require_once("templates/nav.inc.php"); ?>
  <section>
    <div class="contenedor">
      <div class="imagen">
        <img src="<?= $producto["ruta_imagen"]?>" alt="">
      </div>
      <div class="informacion">
        <h1><?= $producto["nombre"]?></h1>
        <div class="categoria">
          <b>Precio</b>
          <p><?= $producto["categoria"]?></p>
        </div>
        <div class="cantidad">
          <b>Precio</b>
          <p><?= $producto["cantidad"]?></p>
        </div>
        <div class="precio">
          <b>Precio</b>
          <p>S/. <?= $producto["precio"]?>.00</p>
        </div>
        <div class="confirmar">
          <a href="confirmar.php?id=<?= $producto["id"]?>"">Confirmar Compra</a>
        </div>
      </div>
    </div>
  </section
</body>
</html>