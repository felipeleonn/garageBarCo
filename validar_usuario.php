<?php 
  session_start();
  $username_ingreso = $_POST['username'];
  $password_ingreso = $_POST['password'];


  include('conexion.php');

  $consulta_usuario = mysqli_query($conexion, "SELECT username, password FROM usuarios WHERE username='$username_ingreso'");

  if(mysqli_num_rows($consulta_usuario)==0) {
    header("Location: index.php?error_ingreso");
  } else {
    $password_tabla = mysqli_fetch_assoc($consulta_usuario);

    $validar = password_verify($password_ingreso, $password_tabla['password']);

    if($validar) {
      $_SESSION['cliente'] = $username_ingreso;
      header("Location: productos.php");
    } else {
      header ("Location: index.php?error_validar");
    }
  }
?>