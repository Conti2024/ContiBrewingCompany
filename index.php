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
		<link rel="stylesheet" href="styles.css" />
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<header class="header">
			<div class="container-hero">
				<div class="container hero">	
					<img src="img/favicon.png" width="65px" height="65px">
					<div class="container-logo">
						<h1 a href="index.php">CONTI BREWING COMPANY</a></h1>
					</div>

					<div class="container-user">
						<?php
						if (isset($_SESSION['user_nombre'])) {
							echo '<span class="user-info">
							
							<i class="fa-solid fa-user"> <span style="font-size: 15px; font-family: poppins;">' . $_SESSION['user_nombre'] . '</span>  <a href="/paginaCerveza/PaginaCerveza/php-login/logout.php" style="font-size: 15px; font-family: poppins; color: black;">Cerrar Sesiòn</a></span></i>';
						} else {

							echo '<span class="login-link"><a href="/paginaCerveza/PaginaCerveza/php-login/login.php" style="font-size: 15px; color: black;" ><i class="fa-solid fa-user"><span style="font-size: 18px; display: none;">INICIAR SESIÓN</a></span></i> ';
						}
						?>
					</div>
				</div>
			</div>

			<input type="checkbox" id="toggle" class="toggle-checkbox">
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
		</header>

			<!--WHATSAPP-->
			<div class="whatsapp-btn">
				<a href="https://api.whatsapp.com/send?phone=4431075027" target="_blank">
				<img src="img/logoWhatsAppBN.png" alt="WhatsApp">
				</a>
			</div>

			<!--CARRUSEL-->
			<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="img/carrusel3.png" class="d-block w-100" alt="carrusel 1">
			  </div>
			  <div class="carousel-item">
				<img src="img/carrusel2.png" class="d-block w-100" alt="carrusel 2">
			  </div>
			  <div class="carousel-item">
				<img src="img/carrusel1.png" class="d-block w-100" alt="carrusel 3">
			  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		  </div>
	
		  <!-- TERMINO-->

		<main class="main-content">
			<br><br><br>
			<section id="nosotros">
				<h1 class="heading-1">¿QUIÉNES SOMOS?</h1> <br><br>
				<div class="nosotros">
					<br><br>
				<p>"Somos una cervecería artesanal divertida dedicada a la elaboración de cervezas de alta calidad. Fundada en el año 2022, nuestra pasión por la cerveza nos ha llevado a experimentar con diversos ingredientes y procesos para ofrecer a nuestros clientes una experiencia única, llevando a sus paladares cervezas que se adaptan a lo que están acostumbrados para que así, puedan descubrir el mundo de la cerveza artesanal.<br><br>
					Nuestro equipo está formado por expertos cerveceros comprometidos con la calidad y la innovación. Trabajamos arduamente para perfeccionar nuestras recetas y asegurar que cada cerveza que producimos cumpla con los más altos estándares de calidad.<br><br>
					Además de nuestro compromiso con la excelencia en la elaboración de cerveza, también nos preocupamos por el medio ambiente y la comunidad. Utilizamos ingredientes locales siempre que sea posible y nos esforzamos por minimizar nuestro impacto ambiental en cada etapa del proceso de producción."
				</p>
				  <br><br>
				  <img class="imagenfrase" src="img/GALERIA/no necesitas.jpg">
				</div>
			  </section>
			  <div class="vender-cerveza">
					<div class="vender-cerveza-content">
							<h1>RESTAURANTES Y VENTA AL MAYOREO</h1><br>
							<h2>¿Quieres vender nuestras cervezas?</h2> <!-- Aquí está la corrección -->
							<p>Tenemos precios especiales de mayoreo para ti. ¡Contáctanos ahora mismo!</p>
							<a href="contactanos.html" class="btn-contacto" data-toggle="modal" data-target="#formularioModal">CONTACTAR</a>
					</div>
				</div>

				<seccion class="container top-products" id="lista-2">
					<div class="swiper mySwiper">
				<br><br><br><br>
					<h1 class="heading-1">NUESTRAS CERVEZAS</h1>
					<div class="container-products">
						<!-- Producto 1 -->
						<div class="card-product" data-id="1">
							<div class="container-img">
								<img src="img/GALERIA/tucanaSola.png">
							</div>
							<div class="content-card-product" id="lista-2">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<h3>CERVEZA TUCANA</h3>
								<p class="precio">60.00</p>
								<a href="#" class="agregar-carrito btn-2" data-id="1">AGREGAR AL CARRITO</a>
							</div>
						</div>
						<!-- Producto 2 -->
						<div class="card-product" data-id="2">
							<div class="container-img">
								<img src="img/GALERIA/camaleonaSola.png">
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
								<p class="precio">60.00 </p>
								<a href="#" class="agregar-carrito btn-2" data-id="2">AGREGAR AL CARRITO</a>
							</div>
							
						</div>
						<!--  -->
					</div>
					</div>
				</seccion>
			<br><br>
		
			<br><br>
			<section class="gallery">
				<img src="img/GALERIA/IMG_2233.jpg" alt="Gallery Img1" class="gallery-img-1"/>
				<img src="img/GALERIA/IMG_1680.jpg" alt="Gallery Img2" class="gallery-img-2"/>
				<img src="img/ImagenesPadel/tucanayCamaleona4.jpg"	alt="Gallery Img3" class="gallery-img-3"/>
				<img src="img/GALERIA/IMG_2209.jpg" alt="Gallery Img4" class="gallery-img-4"/>
				<img src="img/ImagenesPadel/TucanayCamaleonaPadel.JPG" alt="Gallery Img5" class="gallery-img-5"/>
			</section>

			<br><br><br>
			<br><br><br>

			<section class="container blogs">
				<h1 class="heading-1">NOTICIAS</h1>
				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<a href="https://www.eleconomista.com.mx/el-empresario/Dia-Internacional-de-la-Cerveza-Los-retos-detras-de-la-produccion-artesanal-20230804-0030.html">
								<img src="img/blog-1.jpg" alt="Imagen Blog 1" />
							</a>
							<div class="button-group-blog">
								<span>
									<a href="https://www.eleconomista.com.mx/el-empresario/Dia-Internacional-de-la-Cerveza-Los-retos-detras-de-la-produccion-artesanal-20230804-0030.html" target="_blank">
										<i class="fa-solid fa-link"></i>
									</a>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h2>¡Día Internacional de la Cerveza! Los retos detrás de la producción artesanal</h2>
							<span>04 de Agosto de 2023</span>
							<p>
								Los pequeños productores pagan el 26.5% de Impuesto Especial sobre Producción y Servicios (IEPS), mientras que las cervecerías comerciales pagan alrededor del 8%.
							</p>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="img/blog-2.jpg" alt="Imagen Blog 2" />
							<div class="button-group-blog">
								<span>
									<a href="https://primeraplana.mx/archivos/983000" target="_blank">
										<i class="fa-solid fa-link"></i>
									</a>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h2>Pequeños cerveceros artesanales, los más perjudicados por el covid</h2>
							<span>5 abril, 2024</span>
							<p>
								A cinco años de la crisis provocada por la pandemia de covid, pequeños productores de cerveza Artesanal en Michoacán apenas inician el proceso de recuperación, señaló el presidente de la Asociación de Cerveceros Artesanales de Michoacán, Jorge Salgado.
							</p>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="img/blog-3.jpg" alt="Imagen Blog 3" />
							<div class="button-group-blog">
								<span>
									<a href="https://www.eleconomista.com.mx/los-especiales/Cerveza-artesanal-mexicana-un-mercado-en-expansion-20240305-0147.html" target="_blank">
										<i class="fa-solid fa-link"></i>
									</a>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h2>Cerveza artesanal mexicana, un mercado en expansión</h2>
							<span>06 de Marzo de 2024</span>
							<p>
								La cerveza artesanal mexicana se ha convertido en un mercado en expansión y crecimiento. Nuevos emprendedores se suman a la producción de cerveza año tras año con diferentes e innovadoras propuestas.
							</p>
						</div>
					</div>
				</div>
				<br><br><br>
			</section>
		</main>
		<br>
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
				</div>
				<div class="copyright"><p> &copy; 2024 - Conti Brewing Company </p></div>
			</div>
		</footer>
		
		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
		<script src="carrito.js"></script> 
	</body>
</html>
