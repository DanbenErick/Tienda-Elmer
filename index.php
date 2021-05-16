<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos.css">
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
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
        <article class="producto">
          <img src="https://e39a9f00db6c5bc097f9-75bc5dce1d64f93372e7c97ed35869cb.ssl.cf1.rackcdn.com/img-Nc9evRZF.jpg" alt="">
          <p>Yogurt</p>
        </article>
      </div>
    </main>
  </section>
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