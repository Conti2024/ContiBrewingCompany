<?php
    require 'database.php';

    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO users (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $conn->prepare($sql);
		$stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if($stmt->execute()){
            $message = 'Usuario creado satisfactoriamente';
        } else{
            $message = 'No se pudo guardar';
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CONTI BREWING COMPANY<</title>
    <link rel="icon" href="/PaginaCerveza/paginaCerveza/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/estilitologin.css">
  </head>
  <body>
  <header class="header">
      <input type="checkbox" id="toggle">

      <label for="toggle"><img  class="menu" src="img/menu.png" alt="menu"></label>
      <nav class="navigation"> 
        <ul>
          <li><a href="/PaginaCerveza/paginaCerveza/index.php">INICIO</a></li>
          <li><a href="#">NUESTRAS CERVEZAS</a>
            <ul>
              <li><a href="/PaginaCerveza/paginaCerveza/camaleona.php">CAMALEONA</a></li>
              <li><a href="/PaginaCerveza/paginaCerveza/tucana.php">TUCANA</a></li>
            </ul>
          </li>
          <li><a href="/PaginaCerveza/paginaCerveza/contactanos.html">CONTACTANOS</a></li>
        </ul>
      </nav>
  	</header>

    <body>
        <?php if(!empty($message)): ?>
        <p> <?= $message?></p>
        <?php endif; ?>
        

    
    <div class="nosotros">
    <form class="formulario" action="singup.php" method="post">
    <h1 class="letrasTitulo">REGISTRARTE</h1> 
    <span class="letrasEnlace"><a href="login.php"> Iniciar Sesión  </a></span>
		<input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
        <input type="submit" value="REGISTRARSE">
    </form>
    </div>

    </body>
    <footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>Dirección: Guillermo Prieto 268, Col. Centro, 58000 Morelia, Mich.</li>
							<li>Teléfono: 443-312-6745</li>
							<li>Email: ventas@fabricacatar.com</li>
						</ul>

						
						<div class="social-icons">
							<a href="https://m.facebook.com/profile.php?id=100088711789963&_rdr" class="link" target="_blank">
								<span class="facebook">
								  <i class="fa-brands fa-facebook-f"></i>
								</span>
							</a>
							<!--<span class="twitter">
								<i class="fa-brands fa-twitter"></i> -->
							</span>
							<a href="https://www.instagram.com/contibrewingcompany?igsh=eWV2andkeHFpcHc4" class="link" target="_blank">
								<span class="instagram">
								  <i class="fa-brands fa-instagram"></i>
								</span>
							</a>
							<a href="" class="link" target="_blank">
								<span class="whatsapp">
									<i class="fa-brands fa-whatsapp"></i>
								</span>
							</a>
							  
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="sobreNosotros.html">Acerca de Nosotros</a></li>
							<li><a href="politicasPrivacidad.html">Politicas de Privacidad</a></li>
							<li><a href="terminosCondiciones.html">Términos y condiciones</a></li>
							<li><a href="contactanos.html">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="iniciarsesion.html" target="_blank">Mi cuenta</a></li>
						</ul>
					</div>
				</div>

				<div class="copyright">
					<p>
						&copy; 2024 - Conti Brewing Company
					</p>
				</div>
			</div>
		</footer>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</html>