<?php
  try {
    $conexion= new PDO('mysql:localhost;dbname=encriptador','root','');
  } catch (PDOException $e) {
    echo "ERROR: ".$e->getMessage();
  }
?>
