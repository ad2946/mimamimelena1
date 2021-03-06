<?php
session_start();
include 'php/db.php';

if(isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  $nombre = $_SESSION['nombre'];
  $apellidos = $_SESSION['apellidos'];
}
?>

<!DOCTYPE html>

<html lang="es">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>MimaMiMelena</title>
		
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- Customizable CSS -->
		<link href="assets/css/main.css" rel="stylesheet" data-skrollr-stylesheet>
		<link href="assets/css/orange.css" rel="stylesheet" title="Color">
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<link href="assets/css/owl.transitions.css" rel="stylesheet">
		<link href="assets/css/animate.min.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">
		
		<!-- Icons/Glyphs -->
		<link href="assets/fonts/fontello.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/moroccanoil_logo.ico">
		
	</head>
	
	<body id="top">
		
		<!-- ============================================================= HEADER ============================================================= -->
		
		<header>
			<div class="navbar">
				
				<div class="navbar-header">
					<div class="container">
						
						<ul class="info pull-left">
							<li><a href="#"><i class="icon-mail-1 contact"></i> info@mimamimelena.com</a></li>
							<li><i class="icon-mobile contact"></i> +34 91 740 7272</li>
						</ul><!-- /.info -->
						
						<ul class="social pull-right">
							<li><a href="#"><i class="icon-s-facebook"></i></a></li>
							<li><a href="#"><i class="icon-s-twitter"></i></a></li>
							<li><a href="#"><i class="icon-s-pinterest"></i></a></li>
						</ul><!-- /.social -->
						
						<!-- ============================================================= LOGO MOBILE ============================================================= -->
						
						<a class="navbar-brand" href="#"><img src="assets/images/logo_Moroccanoil.png" class="logo" alt=""></a>
						
						<!-- ============================================================= LOGO MOBILE : END ============================================================= -->
						
						<a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>
						
					</div><!-- /.container -->
				</div><!-- /.navbar-header -->
				
				<div class="yamm">
					<div class="navbar-collapse collapse">
						<div class="container">
							
							<!-- ============================================================= LOGO ============================================================= -->
							
							<a class="navbar-brand scroll-to" href="#top"><img src="assets/images/logo_Moroccanoil.png" class="logo" alt=""></a>
							
							<!-- ============================================================= LOGO : END ============================================================= -->
							
							
							<!-- ============================================================= MAIN NAVIGATION ============================================================= -->
							
							<ul class="nav navbar-nav pull-right">
							
								<li><a href="#home" class="scroll-to" data-anchor-offset="0">HOME</a></li>
								<li><a href="#cuidado" class="scroll-to" data-anchon-offset="0">CUIDADOS DEL CABELLO</a></li>
								<li><a href="#productos" class="scroll-to" data-anchor-offset="0">PRODUCTOS</a></li>
								<li><a href="#estilistas" class="scroll-to" data-anchor-offset="0">ESTILISTAS</a></li>
								<li><a href="#footer" class="scroll-to" data-anchor-offset="0">CONTACTO</a></li>

								<?php
									if(isset($_SESSION['usuario'])){?>
										<li><a href="#" class="dropdown-toggle js-activated"><i class="icon-user"></i> <?php echo $nombre." ".$apellidos; ?></a>
											<ul class="dropdown-menu">
												<li><a href='infoUser.php'><i class="icon-cog"></i> Mi cuenta</a></li>
												<li><a href='logout.php'><i class="icon-logout"></i> Cerrar Sesi&oacuten</a></li>
											</ul>
										</li>
								<?php
									}else {
								?>
									<li><a href='inicioregistro.php'><span class='glyphicon glyphicon-user'></span> INICIA SESION</a></li>
								<?php
									}
								?>
																
							</ul><!-- /.nav -->
							
							<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
							
						</div><!-- /.container -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.yamm -->
			</div><!-- /.navbar -->
		</header>
		
		<!-- ============================================================= HEADER : END ============================================================= -->
		
		
		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>


			
			<!-- ============================================================= SECTION – HERO ============================================================= -->



			<section id="home" class="img-bg img-bg-soft" style="background-image: url(assets/images/campaign1.jpg);">
				<div class="container inner">
					<div class="row">
						<div class="col-md-8 col-sm-9">
								<h1 class="fadeInLeft-1 light-color"><br>Tratamiendo Moroccanoil</h1>
								<p class="fadeInLeft-2 light-color">LA INNOVACIÓN A BASE DE ACEITE DE ARGÁN QUE REVOLUCIONÓ EL CUIDADO DEL CABELLO.</p>
							<!--<a href="productos.html" class="btn btn-large">Visita nuestro cat&aacutelogo</a>-->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>



			
			<!-- ============================================================= SECTION – HERO : END ============================================================= -->				
			
			<!-- ============================================================= SECTION – CUIDADO·DEL·CABELLO ============================================================= -->
			
			<section id="cuidado">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Cuidados del cabello<br>&iquestQu&eacute productos debes usar?</h1>
								<p>Te ayudamos a elegir los productos perfectos para cada fase en el cuidado de tu melena.</p>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
					
					<div class="row inner-top-sm">
						<div class="col-xs-12">
							<div class="tabs tabs-reasons tabs-circle-top tab-container">
								
								<ul class="etabs text-center">
									<li class="tab"><a href="#cc-1"><div>1</div>Lavado</a></li>
									<li class="tab"><a href="#cc-2"><div>2</div>Acabado</a></li>
								</ul><!-- /.etabs -->
								
								<div class="panel-container">
									
									<div class="tab-content" id="cc-1">
										<div class="row">
											
											<div class="col-md-5 col-md-push-5 col-md-offset-1 col-sm-6 col-sm-push-6 inner-left-xs">
												<figure><img src="images/lavado.jpg" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-md-pull-5 col-sm-6 col-sm-pull-6 inner-top-xs inner-right-xs">
												<h3>Lavado</h3>
												<p>Dependiendo de las exigencias de tu cabello, volumen, hidrataci&oacuten, reparaci&oacuten o color, los productos que utilices en el lavado ser&aacuten cruciales a la hora obtener el acabado perfecto.</p>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="cc-2">
										<div class="row">
											
											<div class="col-md-4 col-md-push-3 col-md-offset-1 col-sm-6 inner-left-xs inner-right-xs">
												<figure><img src="images/acabado.jpg" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-3 col-md-pull-4 col-sm-6 inner-top-xs">
												<h3>Acabado</h3>
												<p>Si tu pelo es rizado tendrás que utilizar espuma o espray para definir tus rizos. Si tu pelo se encrespa mucho te vendrá bien un producto anti-encrespamiento. O si te has hecho un recogido y tienes el pelo fino, la laca hará que tu peinado dure intacto más tiempo. Los productos de styling son los últimos que debes aplicar en tu melena para conseguir el acabado que desees, sobre el cabello húmedo o seco, como toque final.</p>
											</div><!-- /.col -->
											
											<div class="col-md-3 col-sm-6 inner-top-xs">
												<h3>Tratamiento de calor</h3>
												<p>Secadores, planchas, tenacillas… No deberías utilizar ninguna herramienta de calor sin aplicar antes un producto que proteja tu cabello de las altas temperaturas, sobre todo si está teñido o tienes mechas, porque es más seco. El protector evita que el pelo se rompa, que se deshidrate y también limita el encrespamiento. Aplícalo de medios a puntas antes de usar cualquier herramienta, sobre el pelo mojado o seco.</p>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									 
								</div><!-- /.panel-container -->
								 
							</div><!-- /.tabs -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – CUIDADO·DEL·CABELLO : END ============================================================= -->
			<!-- ============================================================= SECTION – PRODUCTOS ============================================================= -->
		
			<section id="productos" class="img-bg img-bg-soft tint-bg" style="background-image: url(images/banner.jpg);">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9">
							<header>
								<h1>Productos</h1>
								<p>MimaMiMelena cuenta con una amplia gama de productos de la Marca de vanguardia Moroccanoil.
									<br>Si quieres saber qu&eacute productos le vienen mejor a tu cabello, accede a nuestra p&aacutegina de productos.</p>
							</header>
							<a href="productos.php" class="btn btn-large">Visita nuestro cat&aacutelogo</a>
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – PRODUCTOS : END ============================================================= -->
			
			<section id="estilistas">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Nuestros estilistas</h1>
								<p>Ofrecemos profesionales titulados y que se encuentran en constante aprendizaje para realizar todo lo que le puedan proponer los clientes.</p>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
					
					<div class="row">
						<div class="col-xs-12 inner-top">
							<div class="tabs tabs-services tabs-circle-top tab-container">
								
								<ul class="etabs text-center">
									<li class="tab"><a href="#tab-1"><div><i class="icon-scissors"></i></div>Charlie</a></li>
									<li class="tab"><a href="#tab-2"><div><i class="icon-brush"></i></div>Maria</a></li>
								</ul><!-- /.etabs -->
								
								<div class="panel-container">
									
									<div class="tab-content" id="tab-1">
										<div class="row">
											
											<div class="col-md-5 col-md-offset-1 col-sm-6 inner-right-xs">
												<figure><img src="images/estilistas/charlie.jpg" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-sm-6 inner-top-xs inner-left-xs">
												<h3>Charlie</h3>
												<p>Si quieres un estilo totalmente desenfadado y un poco de atrevimiento, &iexcleste es tu hombre!</p>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-2">
										<div class="row">
											
											<div class="col-md-5 col-md-push-5 col-md-offset-1 col-sm-6 col-sm-push-6 inner-left-xs">
												<figure><img src="images/estilistas/maria.jpg" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-md-pull-5 col-sm-6 col-sm-pull-6 inner-top-xs inner-right-xs">
												<h3>Maria</h3>
												<p>Recogidos, tintes, permanentes, para todo lo que necesites María es la mejor elección</p>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									 
								</div><!-- /.panel-container -->
								 
							</div><!-- /.tabs -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – ESTILISTAS : END ============================================================= -->

			

			
		</main>
		
		<!-- ============================================================= MAIN : END ============================================================= -->
		
		
		<!-- ============================================================= FOOTER ============================================================= -->
		
		<footer id="footer" class="dark-bg">
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-4 col-sm-6 inner">
						<h4>Qui&eacutenes somos</h4>
						<p>Somos una empresa dedicada a la peluquer&iacutea con el objetivo de llegar a la mayor cantidad de personas interesadas de este sector.</p>
						<a href="contacto.php" class="txt-btn">&iquestQuieres saber m&aacutes?</a><br>
						<a href="avisolegal.php" class="txt-btn">Aviso legal</a>
					</div><!-- /.col -->
					
					<div class="col-md-4 col-sm-6 inner">
						<h4>Videos de Youtube</h4>
						
						<div class="row thumbs gap-xs">
														
							<div class="col-xs-6 thumb">
								<iframe width="200" height="100" src="https://www.youtube.com/embed/3i1GQJQAvOA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div><!-- /.thumb -->
							
							<div class="col-xs-6 thumb">
								<iframe width="200" height="100" src="https://www.youtube.com/embed/zNm3Q0kTk2E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div><!-- /.thumb -->	

							<div class="col-xs-6 thumb">
								<iframe width="200" height="100" src="https://www.youtube.com/embed/C-Nd6ITQd1k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>	

							<div class="col-xs-6 thumb">
								<iframe width="200" height="100" src="https://www.youtube.com/embed/wiGM1-4iKLY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>			
						</div><!-- /.row -->
					</div><!-- /.col -->
					
					
					<div class="col-md-4 col-sm-6 inner">
						<h4>Informaci&oacuten importante</h4>
						<ul class="contacts">
							<li><i class="icon-location contact"></i> R&uacutea Emilia Pardo Baz&aacuten, 3, A Coru&ntildea</li>
							<li><i class="icon-mobile contact"></i> +34 91 740 7272</li>
							<li><a href="#"><i class="icon-mail-1 contact"></i> info@mimamimelena.com</a></li>
						</ul><!-- /.contacts -->
					</div><!-- /.col -->				
				</div><!-- /.row --> 
			</div><!-- .container -->
		</footer>
		<!-- ============================================================= FOOTER : END ============================================================= -->
		
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.easing.1.3.min.js"></script>
		<script src="assets/js/jquery.form.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
		<script src="assets/js/skrollr.min.js"></script>
		<script src="assets/js/skrollr.stylesheets.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/waypoints-sticky.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/jquery.isotope.min.js"></script>
		<script src="assets/js/jquery.easytabs.min.js"></script>
		<script src="assets/js/google.maps.api.v3.js"></script>
		<script src="assets/js/viewport-units-buggyfill.js"></script>
		<script src="assets/js/scripts.js"></script>
		<script src="js/scriptEstilistas.js"></script>
	</body>
</html>