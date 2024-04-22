<?php

require "funciones-gimnasio.php";

session_start();


$usuario=$_POST['txtUsuario'];
$clave=$_POST['txtClave'];

conectar();

if (validarLogin($usuario, $clave)){
	echo "1";
} else {
	echo "0";
}
desconectar();
?>