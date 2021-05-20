<?php

  require_once("modules/funciones.inc.php");

  $id = $_GET['id'];
  $estado = $_GET['estado'];

  if(detectar_vacio($id, $estado)["ok"]) {
    if($estado == "entregada") {
      if(establecer_entregado($id)["ok"]) {
        header("Location: ../pedidos.php");
      } else {
        header("Location: ../pedidos.php?mensaje=error_register");
      }
    }elseif($estado == "rechazada") {
      if(establecer_rechazado($id)) {
        header("Location: ../pedidos.php");
      }else {
        header("Location: ../pedidos.php?mensaje=error_register");
      }
    }
  }

?>