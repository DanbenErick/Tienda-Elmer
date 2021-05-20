<?php

  session_start();
  require_once("php/modules/funciones.inc.php");

  @$_SESSION["permiso"] != 1 ? header("Location: index.php"): null;

  $pedidos = traer_pedidos()['data'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedidos | Tienda</title>
  <link rel="stylesheet" href="assets/css/estilos-pedidos.css">
</head>
<body>
  <?php require_once("templates/nav.inc.php"); ?>
  <section>
    <div class="container">
      <h1>Pedidos</h1>
      <div class="container-table">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Cliente</th>
              <th>Productos</th>
              <th>Accion</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($pedidos as $pedido):?>
              <tr>
                <td><?=$pedido["id"]?></td>
                <td><?=$pedido["cliente"] ?></td>
                <td><?=$pedido["productos"]?></td>
                <td>
                  <a class="entregada" href="php/estado.php?estado=entregada&id=<?= $pedido["id"]?>">Entregada</a>
                  <a class="rechazada" href="php/estado.php?estado=rechazada&id=<?= $pedido["id"]?>">Rechazar</a>
                </td>
                <td><?php if($pedido["estado"] == 0) {
                  echo "Pendiente";
                } elseif($pedido["estado"] == 1) {
                  echo "Aceptado";
                } else {
                  echo "Rechazado";
                }?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>    
  </section>
</body>
</html>