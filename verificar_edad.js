// Función para cerrar la página
function cerrarPagina() {
    window.close(); // Cierra la página actual
}

// Función para mostrar el modal
function openModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
}

// Función para cerrar el modal
function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

// Función para verificar la edad y cerrar la página si es necesario
function verificarEdad(respuesta) {
    if (respuesta === 'si') {
        window.location.href = "index.php";
    } else {
        openModal();
    }
}
