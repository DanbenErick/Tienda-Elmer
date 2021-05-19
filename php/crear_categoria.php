<?php

require_once("modules/funciones.inc.php");

$nombre_categoria = $_POST['categoria'];

if(detectar_vacio($nombre_categoria)["ok"]){
  crear_categoria($nombre_categoria)["ok"] ? header("Location: ../categoria.php?mensaje=create_success") : header("Location: ../categoria.php?mensaje=create_fail");
}


?>