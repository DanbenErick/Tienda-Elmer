<?php
session_start();
require_once("modules/funciones.inc.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if(detectar_vacio($usuario, $password)) {
  $login = login_usuario($usuario, $password);
  if($login["ok"]) {
    $_SESSION['id'] = $login["data"]["id"];
    $_SESSION['nombre'] = $login["data"]["nombre"];
    $_SESSION['permiso'] = $login["data"]["permiso"];
    $_SESSION['carrito'] = [];
    // var_dump($login["data"]);
    header("Location: ../index.php?mensaje=login_success");
  }
  
}

?>