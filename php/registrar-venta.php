<?php

  session_start();
  require_once("modules/funciones.inc.php");

  $cliente = $_GET['cliente'];
  $productos = $_GET['productos'];

  if(detectar_vacio($cliente, $productos)) {

    var_dump($cliente);
    var_dump($productos);
    $registro = registrar_venta($cliente, $productos, 0);
    
    $_SESSION['carrito'] = [];

    $registro["ok"] ? header("Location: ../confirmacion.php") : header("Location: ../cesta.php?mensaje=error_buy");
  }

?>