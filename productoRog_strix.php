<!DOCTYPE html>
<?php
session_start(); // Start the session
$session_value=(isset($_SESSION['usuario']))?$_SESSION['usuario']:'';
require_once("dbcontroller.php");
$conn = mysqli_connect("localhost","root","12345678","proyecto");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("CALL `pa_productoPorCodigo`('" . $_GET["code"] . "')");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;
	case "buy":
		$resultUser = mysqli_query($conn, "SELECT id_usuario FROM usuario WHERE username = '". $session_value ."'");
		$varusuario = mysqli_fetch_row($resultUser);
		mysqli_query($conn, "INSERT into factura(id_usuario) values (". $varusuario[0] .")");
		$resultID = mysqli_query($conn,"SELECT id FROM factura ORDER BY id DESC LIMIT 1");
		$idFactura = mysqli_fetch_row($resultID);
		foreach ($_SESSION["cart_item"] as $item){
			$resultCode = mysqli_query($conn, "SELECT id FROM producto WHERE code = '". $item["code"] ."'");
			$idProd = mysqli_fetch_row($resultCode);
			mysqli_query($conn, "INSERT into factura_producto(id_factura, id_producto, cantidad) values (". $idFactura[0] .", " . $idProd[0] .", " . $item["quantity"] . ")");
		}
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<html lang="es">
<head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/producto.css">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Asus ROG Strix</title>

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

		<link href="style.css" type="text/css" rel="stylesheet" />
        
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
							<li>
										<button id="carritoCompra">
		<img src="assets/img/cart.png" height="20px" width="20px"/>
	</button>
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
										document.getElementById("Inicio").href = "perfil.php";
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
				<div id="shopping-cart" style="display: none">
					<div class="txt-heading">Carrito de compra

					</div>
					<script>
						const botonCarrito = document.getElementById("carritoCompra")
						const elementoCarrito = document.getElementById("shopping-cart")
						botonCarrito.addEventListener("click", event => {
							if (elementoCarrito.style.display === "none"){
								elementoCarrito.style.display = "block"
							}
							else{
								elementoCarrito.style.display = "none";
							}
						})
					</script>
					<a id="btnEmpty" href="productoRog_strix.php?action=empty">Vaciar carrito</a>
					<?php
					if(isset($_SESSION["cart_item"])){
						$total_quantity = 0;
						$subtotal_price = 0;
						$itbms = 0;
						$total_price = 0;
					?>	
					<table class="tbl-cart" cellpadding="10" cellspacing="1">
						<tbody>
							<tr>
								<th style="text-align:left;">Nombre</th>
								<th style="text-align:left;">Codigo</th>
								<th style="text-align:right;" width="5%">Cantidad</th>
								<th style="text-align:right;" width="10%">Precio unitario</th>
								<th style="text-align:right;" width="10%">Price</th>
								<th style="text-align:center;" width="5%">Remover</th>
							</tr>	
							<?php		
								foreach ($_SESSION["cart_item"] as $item){
									$item_price = $item["quantity"]*$item["price"];
									?>
											<tr>
											<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
											<td><?php echo $item["code"]; ?></td>
											<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
											<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
											<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
											<td style="text-align:center;"><a href="productoRog_strix.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="assets/img/icon-delete.png" alt="Remove Item" /></a></td>
											</tr>
											<?php
											$total_quantity += $item["quantity"];
											$subtotal_price += ($item["price"]*$item["quantity"]);
											$itbms = $subtotal_price * 0.07;
											$total_price = $subtotal_price + $itbms;
									}
							?>
							<tr>
								<td colspan="2" align="right">Subtotal:</td>
								<td align="right"></td>
								<td align="right" colspan="2"><strong><?php echo "$ ".number_format($subtotal_price, 2); ?></strong></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2" align="right">Itbms:</td>
								<td align="right"></td>
								<td align="right" colspan="2"><strong><?php echo "$ ".number_format($itbms, 2); ?></strong></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2" align="right">Total:</td>
								<td align="right"><?php echo $total_quantity; ?></td>
								<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><a id="btnComprarCarrito" href="productoRog_strix.php?action=buy">Comprar</a></td>
							</tr>
						</tbody>
					</table>	
					<?php
					} else {
					?>
					<div class="no-records">Tu carrito esta vacio</div>
					<?php 
					}
					?>
				</div>	
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
			                <a class="navbar-brand" href="index.php">Laptop<span>Fast</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li><a href="index.php">Inicio</a></li>
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
        
			<!-- Contenedor de producto -->
        <section class="producto">
            <div class="contenedorProducto">
                <div class="imagenProducto"><img src="assets/img/rog_strix.jpg" alt="Acer Nitro" class="imagenLaptop"></div>
                <div class="contenedorDetalles">
                    <div class="nombreProducto">Laptop Gaming ASUS ROG Strix G16, 165Hz Display, NVIDIA® GeForce RTX™ 4060, Intel Core i7-13650HX, 16GB DDR5, 1TB PCIe Gen4 SSD, Wi-Fi 6E, Windows 11, G614JV-AS74</div>
                    <div class="precioProducto">$1,244.78 </div>
                    <div class="impuestos"> +impuestos</div>
                    <form method="post" action="productoRog_strix.php?action=add&code=LPG16">
                    <div class="botonComprar"> <input type="submit" value="AGREGAR AL CARRITO" class="boton"/><input type="text" class="product-quantity" name="quantity" value="1" size="2"/></div>
					</form>
                    <div class="descripcionProducto">POTENCIA TU JUEGO: Gana más juegos con Windows 11, un procesador Intel Core i7-13650HX de 13.ª generación y una GPU NVIDIA GeForce RTX 4060 para portátiles con 140 W de TGP máximo. MEMORIA Y ALMACENAMIENTO ULTRA RÁPIDOS: Realiza múltiples tareas con agilidad gracias a sus 16 GB de memoria DDR5 a 4800 MHz y 1 TB de SSD PCIe Gen4. REFRIGERACIÓN INTELIGENTE ROG: El Strix G16 incorpora metal líquido Conductonaut Extreme de Thermal Grizzly en la CPU y un tercer ventilador de entrada, entre otras características premium, para un rendimiento más sostenido durante largas sesiones de juego. PANTALLA RÁPIDA: El Strix G16 cuenta con un panel FHD de 165 Hz, 100 % sRGB, validación Pantone, entre otras características premium. XBOX GAME PASS: Obtén un pase gratuito de 90 días y accede a más de 100 juegos de alta calidad. Con juegos añadidos constantemente, siempre hay algo nuevo para jugar.</div>
                </div>
            </div>
        </section>
            <!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.php">Laptop<span>Fast</span></a>
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