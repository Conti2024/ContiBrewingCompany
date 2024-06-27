<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>CONTI BREWING COMPANY</title>
		<link rel="icon" href="img/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="camaleona.css" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!--WHATSAPP-->
	<div class="whatsapp-btn">
		<a href="https://api.whatsapp.com/send?phone=4431075027" target="_blank">
		  <img src="img/iconoCamaleona.png" alt="WhatsApp">
		</a>
	</div>
		
        <body>
            <header>
				<input type="checkbox" id="toggle">
				<div class="logo">
				<label for="toggle"><img class="menu" src="img/menu.png" alt="menu"></label>
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
					<a href="/paginaCerveza/PaginaCerveza/php-login/login.php" >
						<i class="fa-solid fa-user"></i>
					</a>
				</div>
			</div>

			  <!-- Menú simplificado para pantallas pequeñas -->
			  <nav class="small-navigation">
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="tucana.php">TUCANA</a></li>
                <li><a href="contactanos.html">CONTACTANOS</a></li>
            </ul>
        </nav>
		</header>
	
		<div class="parallax"></div>
	
		<main class="main-content">

			<section class="container top-products">
				<br><br>
				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/GALERIA/Camaleona1200.png" alt="" />
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>CERVEZA CAMALEONA</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-shopping"></i>
							</span>
							<p class="price">$60.00 </p>
						</div>
					</div>

					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img"><img src="img/ImagenesPadel/camaleonaCarton.jpg"/></div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>CARTÓN CAMALEONA</h3>
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
					src="img/GALERIA/IMG_2152.jpg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="img/ImagenesPadel/CamaleonaPadel.jpg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="img/ImagenesPadel/CamaleonaHielera.jpg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="img/ImagenesPadel/camaleonaSola.jpg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="img/GALERIA/IMG_1650.jpg"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>
			
				<!--SECCION DE INFO CERVEZA MARINAJE ETC-->
				<div class="cerveza-section">
					<div class="cerveza-info">
						<img src="img/GALERIA/camaleonaSola.png" alt="Mi Cerveza Artesanal">
						<div>
							<h3>DESCUBRE NUESTRA CERVEZA ARTESANAL</h3>
							<p>Camaleona es una cerveza rubia,
								ligeramente amarga con
								presencia de notas maltosas,
								es refrescante y fácil de
								beber, agradable al paladar.</p>
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
							<td>Ligeramente Amarga</td>
							<td><b>-</b></td>
							<td>Dorado | Rubia</td>
							<td><b>5.5%</b></td>
							<td><b>48</b></td>
							<td><b>50</b></td>
						</tr>
					</table>
			
					<h3>MARINAJE IDEAL</h3>
					<div class="marinajes">
					<div class="marinaje">
						<img src="img/ensalada.jpg" alt="Marinaje 1">
						<div class="nombre-mar">
							<span>Ensaladas</span>
						</div>
					</div>
					<div class="marinaje">
						<img src="img/pescado-parrilla.jpg" alt="Marinaje 2">
						<div class="nombre-mar">
							<span>Pescado a la parrilla</span>
						</div>
					</div>
					<div class="marinaje">
						<img src="img/polloplancha.jpg" alt="Marinaje 2">
						<div class="nombre-mar">
							<span>Pollo a la plancha</span>
						</div>
					</div>
					<div class="marinaje">
						<img src="img/pulpo.jpg" alt="Marinaje 2">
						<div class="nombre-mar">
							<span>Mariscos</span>
						</div>
					</div>
					 <div class="marinaje">
						<img src="img/quesos.jpg" alt="Marinaje 2">
						<div class="nombre-mar">
							<span>Quesos semiduros
							</span>
						</div>
					</div>
					<!-- Agrega más divs para más marinajes -->
				</div>
			</div>
		
		</main>

		<section>
			<!-- VIDEOS-->
<div class="video-container">
    <div class="video-wrapper">
        <video class="video" autoplay muted loop>
            <source src="img/VidesoCervezaproceso/IMG_1509.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-wrapper">
        <video class="video" autoplay muted loop>
            <source src="img/VidesoCervezaproceso/IMG_1577.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-wrapper">
        <video class="video" autoplay muted  loop>
            <source src="img/VidesoCervezaproceso/IMG_1579.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-wrapper">
        <video class="video" autoplay muted  loop>
            <source src="img/VidesoCervezaproceso/IMG_1586.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-wrapper">
        <video class="video" autoplay muted  loop >
            <source src="img/VidesoCervezaproceso/IMG_1472.mp4" type="video/mp4">
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
								<span class="facebook"> <i class="fa-brands fa-facebook-f"></i></span>
							</a>
		
							<a href="https://www.instagram.com/contibrewingcompany?igsh=eWV2andkeHFpcHc4" class="link" target="_blank">
								<span class="instagram"> <i class="fa-brands fa-instagram"></i></span>
							</a>

							<a href="" class="link" target="_blank">
								<span class="whatsapp"><i class="fa-brands fa-whatsapp"></i></span>
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
				</div>

				<div class="copyright">
					<p>
						&copy; 2024 - Conti Brewing Company
					</p>
				</div>
			</div>
		</footer>
	

		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
		<!-- Agrega los scripts de Bootstrap (jQuery y Popper.js son requeridos) -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
		<script src="camaleona.js"></script>
        </body>
    </head>
</html>