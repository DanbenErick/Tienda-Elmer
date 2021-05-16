<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'tienda';

  $pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);

?>