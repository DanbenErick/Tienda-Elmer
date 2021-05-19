<?php

  require_once("modules/funciones.inc.php");
  
  $nombre = $_POST['nombre'];
  $categoria = $_POST['categoria'];
  $cantidad = $_POST['cantidad'];
  $precio = $_POST['precio'];
  $imagen = $_FILES['imagen'];
  var_dump($imagen);
  
  if(detectar_vacio($nombre, $categoria, $cantidad, $precio, $imagen)) {
    $type = $imagen['type'];
    $size = $imagen['size'];
    $temp = $imagen['tmp_name'];
    if (!((strpos($type, "gif") || strpos($type, "jpeg") || strpos($type, "jpg") || strpos($type, "png")) && ($size < 2000000))) {
      // Aqui se ve si no es del formato permitido o el tamaño permitido
      header("Location: ../producto.php?mensaje=not_permited");
    }else {
        if (move_uploaded_file($temp, '../assets/img/'.$imagen['name'])) {
        if(crear_producto($nombre, $categoria, $cantidad, $precio, "assets/img/".$imagen['name'])["ok"]) {
          header("Location: ../producto.php?mensaje=producto_success");
        } else {
          header("Location: ../producto.php?mensaje=fail_register_producto");
        }
      }
      else {
        header("Location: ../producto.php?mensaje=fail_upload_image");
      }
    }
  }else {
    header("Location: ../producto.php?mensaje=empty");
  }

?>