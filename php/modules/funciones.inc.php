<?php
  
  require_once("conexion.inc.php");

  function detectar_vacio(...$varibles) {
    foreach($varibles as $variable) {
      if($variable == "") {
        return [
          "ok" => false
        ];
      }
    }
    return [
      "ok" => true
    ];
  }

  function registrar_usuario($nombre, $usuario, $correo, $direccion, $password, $permiso) {
    global $pdo;
    $sql = "INSERT INTO usuarios(nombre, usuario, correo, direccion, password, permission)
    VALUES (:nombre, :usuario, :correo, :direccion, :password, :permission)";

    $new_password = password_hash($password, PASSWORD_DEFAULT);
    
    $insert = $pdo->prepare($sql);
    $insert->bindParam(':nombre', $nombre);
    $insert->bindParam(':usuario', $usuario);
    $insert->bindParam(':correo', $correo);
    $insert->bindParam(':direccion', $direccion);
    $insert->bindParam(':password', $new_password);
    $insert->bindParam(':permission', $permiso);

    return $insert->execute()?  ["ok" => true, "error" => null]: ["ok" => false, "error" => $insert->error()];
  }

  function login_usuario($usuario, $password) {
    global $pdo;
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
    $select = $pdo->prepare($sql);
    $select->bindParam(":usuario", $usuario);
    if($select->execute()) {
      $data = $select->fetchAll()[0];
      // var_dump($data);
      return password_verify($password, $data["password"])? ["ok" => true, "data" => ["id" => $data["id"], "nombre" => $data["nombre"]]]: ["ok" => false]; 
    }
  }

?>