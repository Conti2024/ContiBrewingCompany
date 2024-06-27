<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password, nombre FROM users WHERE email = :email');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilitologin.css">
</head>
<body>
        <?php require 'partials/header.php' ?>

        <?php if(!empty($user)):  ?>
            <br>WELCOME <?= $user['email'] ?>
            <br> Iniciaste sesion satisfactoriamente
            <a href="logout.php">
                    CERRAR SESIÓN 
            </a>
            <?php else: ?>

                <h1>POR FAVOR INICIA SESION O REGISTRATE</h1>
                <a href="login.php">INICIAR SESIÓN</a> |
                <a href="singup.php">REGISTRARTE</a>
            <?php endif ?>
</body>
</html>
