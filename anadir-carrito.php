<?php
  session_start();
  if($_GET["id"] && $_GET["nombre"] && $_GET["imagen"]) {
    $array = [
      "id" => $_GET["id"],
      "nombre" => $_GET["nombre"],
      "imagen" => $_GET["imagen"],
      "precio" => $_GET["precio"]
    ];
    array_push($_SESSION["carrito"], $array);
    // $_SESSION["carrito"] = $array;
  }

?>