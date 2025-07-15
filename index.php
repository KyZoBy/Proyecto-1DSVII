<!doctype html>
<?php
session_start(); // Start the session
$session_value=(isset($_SESSION['usuario']))?$_SESSION['usuario']:'';
?>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Pagina inicial</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
		<header id="header-top" class="header-top">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							<li class="select-opt">
								<select name="language" id="language">
									<option value="default">EN</option>
									<option value="Spanish">ES</option>
									<option value="Japanese">JP</option>
								</select>
							</li>
							<li class="select-opt">
								<select name="currency" id="currency">
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
								</select>
							</li>
							<li class="select-opt">
								<a href="#"><span class="lnr lnr-magnifier"></span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>
							<li class="header-top-contact">
								+507 6767-6767
							</li>
							<li class="header-top-contact">
								<a href="logueo.html" id="Inicio">Inicio sesión
								<script>
									var myvar='<?php echo $session_value;?>';
									if (myvar === ""){
										document.getElementById("Inicio").innerHTML = "Iniciar sesion";
										document.getElementById("Inicio").href = "logueo.html";
									}
									else{
										document.getElementById("Inicio").innerHTML = myvar;
										document.getElementById("Inicio").href = "";
									}
								</script>
							</li>
							<li class="header-top-contact">
								<a href="register.html" id="Registro">Registro</a>
								<script>
									var myvar='<?php echo $session_value;?>';
									if (myvar === ""){
										document.getElementById("Registro").innerHTML = "Registrar";
										document.getElementById("Registro").href = "register.html";
									}
									else{
										document.getElementById("Registro").innerHTML = "Cerrar Sesion";
										document.getElementById("Registro").href = "cerrarSesion.php";
									}
								</script>
							</li>
						</ul>
					</div>
				</li>
			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.html">Laptop<span>Fast</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="#home">Inicio</a></li>
			                    <li class="scroll"><a href="#works">Descubre</a></li>
			                    <li class="scroll"><a href="#explore">Explora</a></li>
			                    <li class="scroll"><a href="#reviews">Crítica</a></li>
			                    <li class="scroll"><a href="#blog">Otros</a></li>
			                    <li class="scroll"><a href="#contact">Registro</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<h2>El mejor sitio para ver y comprar <br> Laptops de calidad </h2>
					<p>
						Encuentra tu laptop gamer según tus necesidades en un solo click 
					</p>
				</div>
				<div class="welcome-hero-serch-box">
					<div class="welcome-hero-form">
						<div class="single-welcome-hero-form">
							<h3>¿Qué?</h3>
							<form action="index.html">
								<input type="text" placeholder="Ex: Laptops, micrófonos, mouse" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-list-with-dots"></i>
							</div>
						</div>
						<div class="single-welcome-hero-form">
							<h3>Localización</h3>
							<form action="index.html">
								<input type="text" placeholder="Ex: Panamá, Colombia, Costa Rica" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-gps-fixed-indicator"></i>
							</div>
						</div>
					</div>
					<div class="welcome-hero-serch">
						<button class="welcome-hero-btn" onclick="window.location.href='#'">
							 buscar :D  <i data-feather="search"></i> 
						</button>
					</div>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="productoNitro.html">
									<img src="assets/img/nitro.jpg" alt="Acer Nitro" class="topic-image">
									</a>
								</div>
								<h2><a href="productoNitro.html">Acer - Nitro</a></h2>
								<p>10 Unidades</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="productoPredator.html">
									<img src="assets/img/predator.jpg" alt="Acer Predator" class="topic-image">
									</a>
								</div>
								<h2><a href="productoPredator.html">Acer - Predator</a></h2>
								<p>7 Unidades</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="productoRog_Zephayrus.html">
									<img src="assets/img/rog_zephayrus.jpg" alt="Rog Zephayrus" class="topic-image">
									</a>
								</div>
								<h2><a href="productoRog_Zephayrus.html">Asus - Rog Zephayrus</a></h2>
								<p>15 Unidades</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="productoRog_strix.html">
									<img src="assets/img/rog_strix.jpg" alt="Rog Strix" class="topic-image">
									</a>
								</div>
								<h2><a href="productoRog_strix.html">Asus - Rog Strix</a></h2>
								<p>12 Unidades</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="productoOmen.html">
									<img src="assets/img/omen.jpg" alt="HP Omen" class="topic-image">
									</a>
								</div>
								<h2><a href="productoOmen.html">HP Omen</a></h2>
								<p>9 Unidades</p>
							</div>
						</li>
					</ul>
				</div>
			</div><!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->

		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>Descubre más</h2>
					<p>Dificultades para conseguir una Laptop?</p>
				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2><a href="#">Escoge tu laptop</a></h2>
								<p>
									Decide tus opciones de compra o llevate por varias compras un descuento 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									Ver más
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-networking"></i>
								</div>
								<h2><a href="#">Laptops a domicilio</a></h2>
								<p>
									Estás muy lejos y deseas que te llevemos tu laptop? Estás en el lugar indicado 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									Ver más
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-location-on-road"></i>
								</div>
								<h2><a href="#">Busca tu tienda mas cercana</a></h2>
								<p>
									Aquí te mostramos las diferentes sucursales que tenemos para que compres 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									Ver más
								</button>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->

		<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Explorar</h2>
					<p>Explora diferentes equipos y sus valoraciones en nuestro mercado</p>
				</div><!--/.section-header-->
				<div class="explore-content">
					<div class="row">
						<div class=" col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/nitro17.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">Acer</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-1">
									<h2><a href="#">Acer Nitro 17</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">5.0</span>
										<a href="#"> 10 valoraciones</a> 
										<span class="explore-price-box">
										
											<span class="explore-price">800$-1300$</span>
										</span>
									
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														<img src="assets/images/explore/person.png" alt="explore person">
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													Maximiza la potencia y el rendimiento con un procesador Intel® Core™ i7 de 10.a generación para equipos portátiles 
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.location.href='#'">Valorar</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/rogzephayrusg16.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">Asus</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2><a href="#">Asus Rog Zephyrus g16</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">4.5</span>
										<a href="#"> 8 valoraciones</a> 
										<span class="explore-price-box">
											
											<span class="explore-price">1500$-2300$</span>
										</span>
								
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														<img src="assets/images/explore/person.png" alt="explore person">
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													Gama alta con características destacadas como una pantalla OLED de 16 pulgadas y opciones de GPU hasta la RTX 4090. 
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn open-btn" onclick="window.location.href='#'">Valorar</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/omen16.avif" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">HP</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-3">
									<h2><a href="#">HP OMEN 16</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">5.0</span>
										<a href="#"> 15 valoraciones</a> 
										<span class="explore-price-box">
											
											<span class="explore-price">920$-2070$</span>
										</span>
										
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														<img src="assets/images/explore/person.png" alt="explore person">
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													Para juegos exigentes: considera modelos con procesadores Intel Core i9 o AMD Ryzen 9, y tarjetas gráficas RTX 4070. 
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.location.href='#'">Valorar</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.explore-->
		<!--explore end -->

		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<h2>Críticas de nuestro clientes</h2>
				<p>Mira lo que nuestro clientes tienen que decir de nosotros</p>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c8.jpg" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Juan a 10km</h2>
									<h4>Se busca</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									hola?, nos vemos?
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c7.jpg" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Ubebueve Eyectenmbuefue Uwebumen Osas</h2>
									<h4>Kenia, Francia</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									no me llego el equipo, estoy muy disgustado con el servicio, no lo recomiendo. Bombarden chepo.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c6.jpg" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Vegetta777</h2>
									<h4>Wakanda, Mi cama</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Bombarden la UTP. No me pagan lo suficiente para hacer esto. XD
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c1.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>Florida, US</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									No solo te llega el equipo que pediste a domicilio, sino que llega con una cajeta muy presentable!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c10.jpg" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Gato Bien Feote</h2>
									<h4>Africa, Roma</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									La atención al cliente es muy, no me pagaron por esta pagina, necesito dinero, por favor.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c3.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Charles Kent</h2>
									<h4>Toronto, CA</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									La atención al cliente es muy buena, te ofrecen buenas ofertas de Verano
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->

		</section><!--/.reviews-->
		<!--reviews end -->

		<!-- statistics strat -->
		<section id="statistics"  class="statistics">
			<div class="container">
				<div class="statistics-counter"> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">900 </div> <span>K+</span>
							</div><!--/.statistics-content-->
							<h3>Visitas</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">230</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>Ventas hechas</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">40</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>Equipos reparados</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">135</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>Clientes Felices</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.counter-->	
		<!-- statistics end -->

		<!--blog start -->
		<section id="blog" class="blog" >
			<div class="container">
				<div class="section-header">
					<h2>Otros artículos</h2>
					<p>También tenemos otros artículos como los que ves aquí</p>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="assets/images/blog/audifonos.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">Logitech G PRO X</a></h2>
									<h4>Desde $160</h4>
									<p>
										Diseñados con y para profesionales de eSports, los Logitech G PRO X ofrecen una calidad de sonido superior y comunicación clara, ideales para sesiones de juego competitivas.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="assets/images/blog/mouse2.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">Logitech G502 HERO</a></h2>
									<h4>Desde $50</h4>
									<p>
										El Logitech G502 HERO combina precisión extrema con personalización avanzada, siendo una elección predilecta entre gamers que buscan rendimiento y versatilidad.​
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="assets/images/blog/discoduro.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">Seagate FireCuda Gaming 2TB RGB</a></h2>
									<h4>Desde $1900</h4>
									<p>
										El Seagate FireCuda Gaming 2TB es un disco duro externo diseñado específicamente para gamers. Su iluminación RGB personalizable añade un toque estético a tu configuración, mientras que su amplia capacidad permite almacenar una extensa biblioteca de juegos y contenido multimedia.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->

		<!--subscription strat -->
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Quieres registrarte para mas información?
					</h2>
					<p>
						Deja tu correo aquí!
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="register.html">
								<input type="email" class="subscription-input-form" placeholder="Ingresa tu correo aquí">
								<button class="appsLand-btn subscribe-btn" onclick="window.location.href='register.html'">
									Crear Cuenta
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->	
		<!--subscription end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.html">Laptop<span>Fast</span></a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
								<li class="button"><a href="contact.html">Contactanos</a></li>
			                    <li class="scroll"><a href="#works">Desubre mas</a></li>
			                    <li class="scroll"><a href="#explore">Explora</a></li>
			                    <li class="scroll"><a href="#reviews">Crítica</a></li>
			                    <li class="scroll"><a href="#blog">Otros</a></li>
			                    <li class="scroll"><a href="#contact">Registro</a></li>
			                    <li class=" scroll"><a href="#contact">Mi cuenta</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
							</p><!--/p-->
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone"> +507 6767-6767</i></span>
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>