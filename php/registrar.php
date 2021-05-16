<?php
  require_once("modules/funciones.inc.php");

  $nombre = $_POST['nombre'];
  $usuario = $_POST['usuario'];
  $correo = $_POST['correo'];
  $direccion = $_POST['direccion'];
  $password = $_POST['password'];
  $rep_password = $_POST['rep_password'];
  $permiso = 0;

  if(detectar_vacio($nombre,$usuario,$correo,$direccion,$password)["ok"]) {
    if($password != $rep_password) {
      header("Location: ../registrate.php?error=not_valid");
    }

    $insert = registrar_usuario($nombre, $usuario, $correo, $direccion, $password, $permiso);

    $insert["ok"] ? header("Location: ../ingresar.php?mensaje=exito_registro"): header("Location: ../registrate.php?mensaje=error_reigstro");

  }else {
    header("Location: ../registrate.php?error=empty");
  }

?>