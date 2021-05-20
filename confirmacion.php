<?php

  session_start();
  require_once("php/modules/funciones.inc.php");
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmacion | Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos-confirmacion.css">
</head>
<body>
  <?php
    $active_link = "confirmacion";
    require_once("templates/nav.inc.php");
  ?>
  <section>
    <main>
      <div class="columna-1">
        <h1>Confirmacion</h1>
        <div class="group-information">
          <h2>Nombre Completo</h2>
          <p>Daniel Bustillos Villar</p>
        </div>
        <div class="group-information">
          <h2>Correo</h2>
          <p>Daniel Bustillos Villar</p>
        </div>
        <div class="group-information">
          <h2>Direccion</h2>
          <p>Daniel Bustillos Villar</p>
        </div>
        <div class="group-information">
          <h2>Fecha de Compra</h2>
          <p>Miercoles 20 de Julio del 2021</p>
          <p>Para ver el estado del pedido clic <a href="estado.php?id=<?= $producto["nombre"] ?>">aqui</a></p>
        </div>
      </div>
      <div class="columna-2">
        <img src="assets/img/img-confirmacion.png" alt="">
      </div>
    </main>
  </section>
</body>
</html>