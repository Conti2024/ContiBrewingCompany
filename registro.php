<?php
// Conexión a la base de datos (reemplaza con tus propios detalles de conexión)
$servername = "localhost";
$username = "nombre_usuario";
$password = "contraseña";
$dbname = "nombre_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Verificar si el formulario de registro ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash de la contraseña (reemplaza esto con tu propio método de hashing)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Consulta SQL para insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>
