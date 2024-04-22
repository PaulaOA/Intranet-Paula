<?php
  require "funciones-gimnasio.php";


  //Validar inicio de sesión como administrador
  if(! haIniciadoSesion() || ! esAdmin()) {
    echo "error";
  } else {
          if (isset($_POST['txtUsuario'])) {
          $usuario = $_POST['txtUsuario'];
          conectar();
          eliminarPermisos($usuario);
          $rutinas = getTodasRutinas();
          foreach ($rutinas as $rutina):
            if(isset($_POST['rutina'.$rutina[0]])) {
            asignarPermisos($usuario, $rutina[0]);
          }
          endforeach;
          echo "permisosEditados";
      }
      
  desconectar();
}

?>