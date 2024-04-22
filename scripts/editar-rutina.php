<?php
  require "funciones-gimnasio.php";
  session_start();
  //Validar inicio de sesión como administrador
  if(! haIniciadoSesion() || ! esAdmin()) {
    header('Location: ../pagina-inicio.html');
  }
  
  if (isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtDescripcion']) && isset($_POST['txtRuta']) && isset($_POST['txtImagen']))
{
    $id = $_POST['txtId'];
    $nombre = $_POST['txtNombre'];
    $descripcion = $_POST['txtDescripcion'];
    $ruta = $_POST['txtRuta'];
    $imagen = $_POST['txtImagen'];
}
  else header('Location: ../panel-admin.php');

  conectar();

  editarRutina($id, $nombre, $descripcion, $ruta, $imagen);

    $_SESSION['mensaje'] = "Datos de rutina actualizados con éxito";

  header('Location: ../admin/actualizar-rutina.php?id='.$id);  
  desconectar();
?>