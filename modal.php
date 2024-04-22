<!doctype html>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modal</title>

	<style>
	.modal {
		position: fixed;
		width: 50%;
		height: 50vh;
		background: rgba(0, 0, 0, 0.85);
		display: block;

	}

	#modal::backdrop {
		background-color: rgba(0, 0, 0, 0.55);
	}




</style>
</head>
<body>
<h1>Ventana modal</h1>
<p>Quiero abrir una ventana modal</p>
<button id="btnAbrirModal">Abrir modal</button>


<dialog id="modal">
	<h1>Inicio de sesión fallido</h1>
	<p>Usuario o contraseña incorrectos</p>
	<button id="btnCerrarModal">Aceptar</button>
</dialog>

<script>
	const btnAbrirModal = document.querySelector("#btnAbrirModal");
	const btnCerrarModal = document.querySelector("#btnCerrarModal");
	const modal = document.querySelector("#modal");

	btnAbrirModal.addEventListener("click", ()=>{
		modal.showModal();
	})
	btnCerrarModal.addEventListener("click", ()=>{
		modal.close();
	})
	
</script>
</body>
</html>