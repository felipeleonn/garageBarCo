<?php
  $username_registro = $_POST ['username'];
  $nombre_registro = $_POST ['nombre'];
  $apellido_registro = $_POST ['apellido'];
  $correo_registro = $_POST ['correo'];
  $password_registro = $_POST ['password'];
  $password2_registro = $_POST ['password2'];

  if($password_registro == $password2_registro) {
    
  include('conexion.php');
  
  $password_encript = password_hash($password_registro, PASSWORD_DEFAULT, array('cost'=>4));

  
  mysqli_query($conexion, "INSERT INTO usuarios VALUES ('$username_registro', '$nombre_registro', '$apellido_registro', '$correo_registro', '$password_encript' )");
  header("Location: index.php?ok");

  } else {
    header("Location: index.php?error");
  }


?>
