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
  <?php require_once("templates/nav.inc.php");?>
  <section>
    <div class="contenedor">
      <h1>Cesta</h1>
      <div class="cesta">
        <div class="cesta-group">
          <div class="cesta-img">
            <img src="assets/img/img-galleta.jpg" alt="">
          </div>
          <div class="cesta-nombre">
            <b>Producto</b>
            <p>Galleta</p>
          </div>
          <div class="cesta-cantidad">
            <b>Cantidad</b>
            <p>150</p>
          </div>
          <div class="cesta-precio">
            <b>Precio</b>
            <p>S/. 500.00</p>
          </div>
          <div class="cesta-boton">
           <button class="boton-eliminar">Eliminar</button>
          </div>
        </div>
        <div class="cesta-group">
          <div class="cesta-img">
            <img src="assets/img/img-galleta.jpg" alt="">
          </div>
          <div class="cesta-nombre">
            <b>Producto</b>
            <p>Galleta</p>
          </div>
          <div class="cesta-cantidad">
            <b>Cantidad</b>
            <p>150</p>
          </div>
          <div class="cesta-precio">
            <b>Precio</b>
            <p>S/. 500.00</p>
          </div>
          <div class="cesta-boton">
           <button class="boton-eliminar">Eliminar</button>
          </div>
      </div>
      <div class="pagar">
        <div class="pagar-informacion">
          <p><b>Total</b> S/.5500.00</p>
        </div>
        <div class="pagar-boton">
          <a class="boton-confirmacion" href="confirmacion.php">Confirmar compra</a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>