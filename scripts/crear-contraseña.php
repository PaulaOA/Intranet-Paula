
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author">
    <meta name="generator">

    <title>Crear contraseña</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<meta name="theme-color" content="#712cf9">

    <style>

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .contenedor {
        width: 100%;
        height: 100%;
      }

    html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    }

    .main {
    display: flex;
    justify-content: center; /* Centrar horizontalmente */
    align-items: center; /* Centrar verticalmente */
    height: 100vh; /* Altura del 100% del viewport */
     }

     .form-signin {
    width: 20%; 
     }

      .modal {
  display: none; /* Por defecto, ocultar el modal */
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.7);
  align-items: center;
}

.modal-content {
  background-color: #fefefe;
  margin: 20% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
  height: 30%;
  z-index: 1100;
}

#btn { 
  background-color: #007bff; /* Color de fondo del botón */
  color: #fff; /* Color del texto del botón */
  border: none; /* Eliminar el borde del botón */
  border-radius: 4px; /* Añadir bordes redondeados al botón */
  cursor: pointer; /* Cambiar el cursor al pasar por encima del botón */
  width: 50%;
  margin-top: auto;
  margin-bottom: 20px;

}

.input-label {
    margin-bottom: 1rem;
}

.input-label span {
    display: block;
    font-size: 0.8rem;
    color: #6c757d;
    margin-bottom: 0.2rem;
}

.input-label .form-floating {
    position: relative;
}

.input-label .form-control {
    padding-top: 1.5rem; /* Ajusta el espacio para el texto */
}
    .modal {
  display: none; /* Por defecto, ocultar el modal */
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.7);
  align-items: center;
}

.modal-content {
  background-color: #fefefe;
  margin: 20% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
  height: 30%;
  z-index: 1100;
}

#btnModalClaveCreada, #btnModalErrorClave, #btnModalClaveVacia, #btnModalClavesDistintas { 
  background-color: #007bff; /* Color de fondo del botón */
  color: #fff; /* Color del texto del botón */
  border: none; /* Eliminar el borde del botón */
  border-radius: 4px; /* Añadir bordes redondeados al botón */
  cursor: pointer; /* Cambiar el cursor al pasar por encima del botón */
  width: 50%;
  margin-top: auto;
  margin-bottom: 20px;

}

    </style>

    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/sign-in.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <?php include "../elementos/elegir-modo.php"; ?>

<div class="contenedor" id="contenedorCrearContraseña">

<main class="main" style="text-align: center;">

    <?php
      if(isset($_GET['usuario'])) {
      $usuario = $_GET['usuario'];
      }
    ?>

  <form class="form-signin" id="formCrearContraseña" method="POST">
    <h1 class="h3 mb-3 fw-normal"><b>Crear Contraseña</b></h1>
    <p>Introduce tu contraseña</p>

     <div class="form-floating">
      <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" value="<?= $usuario ?>" readonly>
    </div>
    <div class="mb-3"></div>

    <div class="form-floating">
      <input type="password" class="form-control" id="txtClave" placeholder="Contraseña" name="txtClave">
      <label for="txtClave">Clave</label>
    </div>
    <div class="mb-3"></div>

    <div class="form-floating">
      <input type="password" class="form-control" id="txtClaveValidada" placeholder="Contraseña" name="txtClaveValidada">
      <label for="txtClaveValidada">Confirma tu clave</label>
    </div>
    <div class="mb-3"></div>


    <button class="btn btn-primary w-100 py-2" id="btnCrearContraseña">Crear contraseña</button>
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
     $(document).ready(function(){
       $("#btnCrearContraseña").click(function(event){
         event.preventDefault();
         $.ajax({
           type: "POST",
           url: "clave-google.php", 
           data: $("#formCrearContraseña").serialize(),
           success: function(response){
            if (response == "ClaveVacia") {
              $("#modalClaveVacia").css("display", "block");
            } else if (response == "ClavesDistintas") {
              $("#modalClavesDistintas").css("display", "block");
            } else if (response == "claveCreada") {
              $("#modalClaveCreada").css("display", "block");
            } else if (response == "ErrorClave") {
              $("#modalErrorClave").css("display", "block");
            } else {
              alert("Fallido");
            }
          } 
         });
         return false;
       });

        $(".close, #btnModalClaveCreada, #btnModalErrorClave, #btnModalClaveVacia, #btnModalClavesDistintas").click(function(){
        $("#modalClaveCreada, #modalErrorClave, #modalClaveVacia, #modalClavesDistintas").css("display", "none");
         if($(this).attr("id") === "btnModalClaveCreada") {
        $("#contenedorCrearContraseña").load("../pagina-inicio.php", function(){
            history.pushState(null,null,"../pagina-inicio.php");
        });
        window.onpopstate = function(event){
            $("#contenedorInicio").load("scripts/crear-contraseña.php");
            };
        }
      });
    });
  </script>
  
</main>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div id="modalClaveCreada" class="modal">
  <div class="modal-content">
    <h1 class="h3 mb-3 fw-normal">¡Clave creada!</h1>
    <p>Ya puedes introducir tus datos para iniciar sesión</p>
    <button id="btnModalClaveCreada">Ir</button>
  </div>
</div>

<div id="modalErrorClave" class="modal">
  <div class="modal-content">
    <h1 class="h3 mb-3 fw-normal">Error</h1>
    <p>No se ha podido crear tu contraseña. Por favor, inténtalo de nuevo</p>
    <button id="btnModalErrorClave">Aceptar</button>
  </div>
</div>

<div id="modalClaveVacia" class="modal">
  <div class="modal-content">
    <h1 class="h3 mb-3 fw-normal">Clave vacía</h1>
    <p>Por favor, introduce una contraseña</p>
    <button id="btnModalClaveVacia">Aceptar</button>
  </div>
</div>

<div id="modalClavesDistintas" class="modal">
  <div class="modal-content">
    <h1 class="h3 mb-3 fw-normal">Claves distintas</h1>
    <p>Las constraseñas no coinciden</p>
    <button id="btnModalClavesDistintas">Volver</button>
  </div>
</div>

    </body>
</html>
