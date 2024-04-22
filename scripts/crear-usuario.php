<?php

require "funciones-gimnasio.php";

if (empty($_POST['txtNombre']) || empty($_POST['txtApellidos']) || empty($_POST['txtUsuario'])|| empty($_POST['txtClave'])) {
    echo "empty";
    exit;

    }

$nombre=$_POST['txtNombre'];
$apellidos=$_POST['txtApellidos'];
$usuario=$_POST['txtUsuario'];
$clave=$_POST['txtClave'];

conectar();

if (getNombreUsuario($usuario)){
    echo "usuarioExistente";
    exit;
} else if (crearUsuario($nombre, $apellidos, $usuario, $clave)){
        echo "registroCorrecto";  
    } else {
        echo "errorRegistro";
    }
desconectar();
?>