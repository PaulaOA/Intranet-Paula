//incluir jquery
document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>');

function cargarPagina(url, contenedor, onpopstateHandler) {
    $.ajax({
        type: "GET",
        url: url,
        success: function(response) {
            $(contenedor).html(response);
            history.pushState(null, null, url);
        },
        error: function(xhr, status, error) {
            console.error("Error al cargar la página:", error);
        }
    });

    // Si se proporciona una función de manejo de eventos onpopstate, se asigna
    if (onpopstateHandler) {
        window.onpopstate = onpopstateHandler;
    }
}