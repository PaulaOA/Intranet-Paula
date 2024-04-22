<?php
//Objeto conexion para consultas a la base de datos
$conexion = null;
function conectar()
{	global $conexion;
	$conexion = mysqli_connect("localhost", "root", "", "gimnasio");
	if(!$conexion){
		return false;
	}
	return true;
}

       //FUNCIONES DE SESIONES

function haIniciadoSesion(){
//para saber si ha iniciado sesión, preguntamos si se ha asignado un valor a la variable de sesión usuario, se utiliza isset
     session_start();
     if (isset($_SESSION['usuario']) || isset($_SESSION['loginGoogle'])) {
     	return true;
     } else {
        return false;
     }  
}

function esAdmin() {

	return $_SESSION['admin'];
}

function validarLogin($usuario, $clave){

	global $conexion;
	$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario."'AND clave= '".$clave."'";
	$respuesta = mysqli_query($conexion, $consulta);

	if ($fila = mysqli_fetch_row($respuesta)){
		session_start();
		$_SESSION['usuario'] = $usuario;
	     $_SESSION['admin'] = $fila[4];

		return true;
	} else {
	return false;
   }
}

       //RUTINAS

function getTodasRutinas(){
	global $conexion;
	$respuesta = mysqli_query($conexion, "SELECT * FROM rutinas");
	return $respuesta->fetch_all();
}

function getRutinasPorUser(){

	global $conexion;
	$respuesta = mysqli_query($conexion, "SELECT rutinas.nombreRutina, rutinas.descripcion, rutinas.ruta, rutinas.imagen FROM permisos INNER JOIN rutinas ON permisos.id_rutina = rutinas.id_rutina WHERE usuario='".$_SESSION['usuario']."' AND permiso=1");
	return $respuesta->fetch_all();
}

function getRutinasPorId($id){
	global $conexion;
	$respuesta = mysqli_query($conexion, "SELECT * FROM rutinas WHERE id_rutina = " .$id);
	return mysqli_fetch_row($respuesta);
}

function editarRutina($id, $nombre, $descripcion, $ruta, $imagen){

	global $conexion;
	mysqli_query($conexion, "UPDATE rutinas SET nombreRutina='".$nombre."', descripcion='".$descripcion."', ruta='".$ruta."', imagen='".$imagen."' WHERE id_rutina= ".$id);
}

        //FUNCIONES USUARIO

function getUsuarios() {
	global $conexion;
	$respuesta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE admin<>1");
	return $respuesta->fetch_all();

} 

function getNombreUsuario($usuario) {
	global $conexion;
	$result = mysqli_query($conexion, "SELECT count(*) AS total FROM usuarios WHERE usuario='".$usuario."'");
	$row = mysqli_fetch_assoc($result);
	$numero = $row['total'];
	return $numero > 0;
}

function getUsuarioExistente($usuario) {
	global $conexion;
	$result = mysqli_query($conexion, "SELECT count(*) AS total FROM usuarios WHERE usuario='".$usuario."' AND clave = '' ");
	$row = mysqli_fetch_assoc($result);
	$numero = $row['total'];
	return $numero > 0;
}

function crearUsuario($nombre, $apellidos, $usuario, $clave){
	global $conexion;
	$query = "INSERT INTO usuarios (nombre, apellidos, usuario, clave, admin) VALUES ('".$nombre."', '".$apellidos."', '".$usuario."', '".$clave."', 0)";
	$resultado = mysqli_query($conexion, $query);
     return $resultado;
}

function crearUsuarioGoogle($nombre, $apellidos, $usuario){
	global $conexion;
	$query = "INSERT INTO usuarios (nombre, apellidos, usuario, admin) VALUES ('".$nombre."', '".$apellidos."', '".$usuario."', 0)";
	$resultado = mysqli_query($conexion, $query);
     return $resultado;
}

function crearClaveUsuarioGoogle($usuario, $clave){
	global $conexion;
	$query = "UPDATE usuarios SET clave='".$clave."' WHERE usuario='".$usuario."'";
	$resultado = mysqli_query($conexion, $query);
	return $resultado;
}

       //FUNCIONES PERMISOS

function eliminarPermisos($usuario){
	global $conexion;
	mysqli_query($conexion, "UPDATE permisos SET permiso=0 WHERE usuario='".$usuario."'");

}

function asignarPermisos($usuario, $idRut) {
	global $conexion;

	$query = "SELECT count(*) AS total from permisos WHERE usuario= '".$usuario."' AND id_rutina= $idRut ";
	$result = mysqli_query($conexion, $query);
	$row = mysqli_fetch_assoc($result);
	$numero = $row['total'];
	if($numero > 0){
		mysqli_query($conexion, "UPDATE permisos SET permiso=1 WHERE usuario='".$usuario."' AND id_rutina= $idRut ");
	} else {
		mysqli_query($conexion, "INSERT INTO permisos VALUES('".$usuario."', $idRut, 1)");
	}
 }

function tienePermiso($usuario, $idRut){
	global $conexion;
	$result = mysqli_query($conexion, "SELECT count(*) AS total FROM permisos WHERE usuario='".$usuario."' AND id_rutina=$idRut AND permiso=1");
	$row = mysqli_fetch_assoc($result);
	$numero = $row['total'];
	return $numero > 0;
}

function desconectar() {
	global $conexion;
	if ($conexion){
		mysqli_close($conexion);
	}
	
} 
?>