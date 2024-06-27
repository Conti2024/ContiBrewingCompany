<?php
// Iniciar o reanudar la sesión
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir al usuario al index
header("Location: /PaginaCerveza/paginaCerveza/index.php");
exit;
?>
