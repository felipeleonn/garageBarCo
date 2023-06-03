<?php
  $nombre_contacto = $_POST ['nombre'];
  $apellido_contacto = $_POST ['apellido'];
  $correo_contacto = $_POST ['correo'];
  $mensaje_contacto = $_POST ['mensaje'];

  include('conexion.php');
  mysqli_query($conexion, "INSERT INTO contacto VALUES (DEFAULT, '$nombre_contacto', '$apellido_contacto', '$correo_contacto', '$mensaje_contacto' )");

  header("Location: contacto.php?ok");
?>



<!--

INSERT -> cargar datos
UPDATE -> modificar datos
DELETE -> borrar datos
SELECT -> seleccionar datos

-->