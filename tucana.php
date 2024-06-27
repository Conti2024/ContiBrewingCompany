<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>CONTI BREWING COMPANY</title>
		<link rel="icon" href="img/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="tucana.css" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		
        <body>
            <header class="header">
				<input type="checkbox" id="toggle">
				<div class="logo">
				<label for="toggle"><img  class="menu" src="img/menu.png" alt="menu"></label>
				<nav class="navigation"> 
					<ul>
						<li><a href="index.php">INICIO</a></li>
						<li><a href="#">NUESTRAS CERVEZAS</a>
							<ul>
								<li><a href="camaleona.php">CAMALEONA</a></li>
								<li><a href="tucana.php">TUCANA</a></li>
							</ul>
						</li>
						<li><a href="contactanos.html">CONTACTANOS</a></li>
					</ul>
				</nav>
			</div>
			<div class="container-hero">
				<div class="container-user">
					<?php
						if (isset($_SESSION['user_nombre'])) {
							echo '<span class="user-info"><i class="fa-solid fa-user"></i> <span style="font-size: 18px; color: #E04D2A;">' . $_SESSION['user_nombre'] . '</span> |   <a href="/paginaCerveza/PaginaCerveza/php-login/logout.php" style="font-size: 15px; color: #E04D2A;">Cerrar Sesiòn</a></span>';
						} else {
							echo '<span class="login-link"><a href="/paginaCerveza/PaginaCerveza/php-login/login.php" style="font-size: 15px; color: #E04D2A;" ><i class="fa-solid fa-user"></i> <span style="font-size: 18px; display: none;">INICIAR SESIÓN</span>';
						}
					?>
				<!--<i class="fa-solid fa-basket-shopping"></i>-->

				</div>
			</div>
		</header>

		<div class="parallax"></div>
		<div class="whatsapp-btn" id="whatsapp-btn">

			<a href="https://api.whatsapp.com/send?phone=4431075027" target="_blank">
			  <img src="img/iconoTucana.png" alt="WhatsApp">
			  <span class="tooltip" id="tooltip">¡Hola!</span>
			</a>
		</div>
		
		<main class="main-content">
			<section class="container top-products">
				<br>				
				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/GALERIA/tucanag1200.png">
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>CERVEZA TUCANA</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$60.00 </p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/ImagenesPadel/tucanahielera2.jpg"/>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>CARTÓN TUCANA</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$720.00</p>
						</div>
					</div>
				</div>
			</section>

			<section class="gallery">
				<img
					src="img/ImagenesPadel/tucanaPadel.jpg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="img/ImagenesPadel/tucanaCombi.jpg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="img/ImagenesPadel/TucanaHielos.jpg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="img/ImagenesPadel/tucanaSola.jpg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="img/ImagenesPadel/tucanaMoto.jpg"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>


			<!--SECCION DE INFO CERVEZA MARINAJE ETC-->
			<div class="cerveza-section">
				<div class="cerveza-info">
					<img src="img/GALERIA/tucanaSola.png" alt="Mi Cerveza Artesanal">
				<div>
					<h3>DESCUBRE NUESTRA CERVEZA ARTESANAL</h3>
					<p>Tucana es una cerveza oscura de cuerpo pleno
						y amargor medio elaborada a partir de
						maltas tostadas y una adición de café
						originario de la región michoacana
						dando como resultado una cerveza fácil
						de beber agradable al paladar.</p>
				</div>
			</div>
		</div>


			<div class="cerveza-table">
				<h3>TABLA DESCRIPCIÓN DE LA CERVEZA</h3>
				<table>
					<tr>
						<th class="letrasth">SABOR</th>
						<th class="letrasth">ESTILO</th>
						<th class="letrasth">COLOR</th>
						<th class="letrasth">ABV</th>
						<th class="letrasth">SRM</th>
						<th class="letrasth">IBU</th>
					</tr>
					<tr>
						<td>Amarga</td>
						<td>Stout</td>
						<td>Oscura</td>
						<td><b>5.5%</b></td>
						<td><b>0.0</b></td>
						<td><b>0.0</b></td>
					</tr>
				</table>

				<h3>MARINAJE IDEAL</h3>
				<div class="marinajes">
				<div class="marinaje">
					<img src="img/ostras2.jpg" alt="Marinaje 1">
					<div class="nombre-mar">
						<span>Ostras</span>
					</div>
				</div>
				<div class="marinaje">
					<img src="img/sashimi.jpg" alt="Marinaje 2">
					<div class="nombre-mar">
						<span>Sashimi de atún</span>
					</div>
				</div>
				<div class="marinaje">
					<img src="img/pulled-porjk.jpg" alt="Marinaje 2">
					<div class="nombre-mar">
						<span>Pulled Pork</span>
					</div>
				</div>
				<div class="marinaje">
					<img src="img/carneroja.jpg" alt="Marinaje 2">
					<div class="nombre-mar">
						<span>Carnes Rojas</span>
					</div>
				</div>
				 <div class="marinaje">
					<img src="img/pastelchocolate.jpg" alt="Marinaje 2">
					<div class="nombre-mar">
						<span>Pasteles Chocolate | Vainilla
						</span>
					</div>
				</div>
				<!-- Agrega más divs para más marinajes -->
			</div>
		</div>
		</main>
<!-- VIDEOS-->

<section>
<div class="video-container">
    <div class="video-wrapper">
        <video class="video" autoplay muted loop>
            <source src="img/ImagenesPadel/tucanaSola2.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-wrapper">
        <video class="video" autoplay muted loop>
            <source src="img/VidesoCervezaproceso/IMG_1506.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-wrapper">
        <video class="video" autoplay muted  loop>
            <source src="img/VidesoCervezaproceso/IMG_1497.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-wrapper">
        <video class="video" autoplay muted  loop>
            <source src="img/VidesoCervezaproceso/IMG_1498-8.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-wrapper">
        <video class="video" autoplay muted  loop >
            <source src="img/VidesoCervezaproceso/IMG_1496.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
</div>
<!--  END VIDEOS-->
</section>

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
							<li><a href="/paginaCerveza/PaginaCerveza/php-login/login.php">Mi cuenta</a></li>
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
	
		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"> </script>
		<!-- Agrega los scripts de Bootstrap (jQuery y Popper.js son requeridos) -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
		<script src="tucana.js"></script>
        </body>
    </head>
</html>


