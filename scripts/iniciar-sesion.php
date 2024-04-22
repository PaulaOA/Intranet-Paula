<?php

require "funciones-gimnasio.php";

$usuario=$_POST['txtUsuario'];
$clave=$_POST['txtClave'];

 conectar();

   if (getUsuarioExistente($usuario)){
   echo "claveVacia";
 } else if (validarLogin($usuario, $clave)){
   if (esAdmin()) {
      echo "admin";
   } else {
      echo "usuario";
   }
 } else {
   echo "0";
 }

 desconectar();

   /*if (validarLogin($usuario, $clave)){
           if(esAdmin()) {
              echo "admin";
           } else {
              echo "usuario";  
          } 
        } else if (getUsuarioExistente($usuario)) {
         echo "claveVacia";
      } else {
           echo "0"; 
          }
       desconectar();*/

?>
