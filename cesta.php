<?php

  session_start();
  if(@$_SESSION["id"] == "") {
    header("Location: index.php");
  }
  $new_carrito = [];
  $precio = 0;
  foreach($_SESSION['carrito'] as $carrito) {
    array_push($new_carrito, $carrito['id']);
    $precio += (int) $carrito['precio'];
  }
  $new_carrito = implode(",",$new_carrito);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cesta | Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos-cesta.css">
</head>
<body>
  <?php
    $active_link = "cesta";
    require_once("templates/nav.inc.php");
  ?>
  <section>
    <div class="contenedor">
      <h1>Cesta</h1>
      <div class="cesta">
        <?php foreach($_SESSION["carrito"] as $carrito):?>
          <div class="cesta-group">
            <div class="cesta-img">
              <img src="<?= $carrito["imagen"] ?>" alt="">
            </div>
            <div class="cesta-nombre">
              <b>Producto</b>
              <p><?= $carrito["nombre"] ?></p>
            </div>
            <div class="cesta-cantidad">
              <b>Cantidad</b>
              <p>1</p>
            </div>
            <div class="cesta-precio">
              <b>Precio</b>
              <p>S/. <?= $carrito["precio"] ?>.00</p>
            </div>
            <div class="cesta-boton">
            <button class="boton-eliminar">Eliminar</button>
            </div>
          </div>
        <?php endforeach;?>
      <div class="pagar">
        <div class="pagar-informacion">
          <p><b>Total</b> S/. <?= $precio ?> .00</p>
        </div>
        <div class="pagar-boton">
          <a class="boton-confirmacion" href="php/registrar-venta.php?cliente=<?= str_replace(" ", "-",$_SESSION['nombre']) ?>&productos=<?= $new_carrito ?>">Confirmar compra</a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>