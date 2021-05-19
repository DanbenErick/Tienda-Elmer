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

  function crear_categoria($nombre_categoria) {
    global $pdo;
    $sql = "INSERT INTO categoria (nombre) VALUES (:categoria)";

    $insert = $pdo->prepare($sql);
    $insert->bindParam(":categoria", $nombre_categoria);
    return $insert->execute() ? ["ok" => true] : ["ok" => false];

  }

  function traer_categorias() {
    global $pdo;
    $sql = "SELECT * FROM categoria";
    $select = $pdo->prepare($sql);
    return $select->execute() ? ["ok" => true, "data" => $select->fetchAll()]: ["ok" => false, "data" => $select->error];
  }

  function crear_producto($nombre, $categoria, $cantidad, $precio, $ruta_imagen) {
    global $pdo;

    $sql = "INSERT INTO productos(nombre, categoria, cantidad, precio, ruta_imagen) VALUES (:nombre, :categoria, :cantidad, :precio, :ruta_imagen)";

    $insert = $pdo->prepare($sql);

    $insert->bindParam(":nombre", $nombre);
    $insert->bindParam(":categoria", $categoria);
    $insert->bindParam(":cantidad", $cantidad);
    $insert->bindParam(":precio", $precio);
    $insert->bindParam(":ruta_imagen", $ruta_imagen);

    return $insert->execute() ? ["ok" => true] : ["ok" => false];

  }

  function traer_productos() {
    global $pdo;
    $sql = "SELECT * FROM productos";
    $select = $pdo->prepare($sql);
    return $select->execute() ? ["ok" => true, "data" => $select->fetchAll()]: ["ok" => false, "data" => null];
  }

  function traer_producto_por_id($id) {
    global $pdo;
    $sql = "SELECT * FROM productos WHERE id=:id";
    $select = $pdo->prepare($sql);
    $select->bindParam(":id", $id);
    return $select->execute() ? ["ok" => true, "data" => $select->fetchAll()]: ["ok" => false, "data" => null];
  }
?>