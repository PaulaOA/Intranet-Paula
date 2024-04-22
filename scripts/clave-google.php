<?php

require "funciones-gimnasio.php";

conectar();

if(isset($_POST['txtUsuario']) && isset($_POST['txtClave']) && isset($_POST['txtClaveValidada'])) {
    $usuario = $_POST['txtUsuario'];
    $clave = $_POST['txtClave'];
    $claveValidada = $_POST['txtClaveValidada'];

    if($clave <> $claveValidada){
    	echo "ClavesDistintas";
	    } else if(empty($clave)) {
	    	echo "ClaveVacia";
	    	} else if (crearClaveUsuarioGoogle($usuario, $clave)){
		    	echo "claveCreada";
    		} else {
	    	echo "ErrorClave";
	    }
} else {
    echo "errorDatos";
} 

desconectar();

?>