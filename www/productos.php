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

<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>REEN</title>
		
		<!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
		<!-- Customizable CSS -->
		<link href="assets/css/main.css" rel="stylesheet" data-skrollr-stylesheet>
		<link href="assets/css/green.css" rel="stylesheet" title="Color">
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<link href="assets/css/owl.transitions.css" rel="stylesheet">
		<link href="assets/css/animate.min.css" rel="stylesheet">


		
		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">
		
		<!-- Icons/Glyphs -->
		<link href="assets/fonts/fontello.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
	
	<body>
		
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
							<li><a href="#"><i class="icon-s-gplus"></i></a></li>
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
							
								<li><a href="index.php" class="scroll-to" data-anchor-offset="0">HOME</a></li>
				
								
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
			
			<!-- ============================================================= SECTION – PRICING TABLES ============================================================= -->
			
			<section id="pricing-tables">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Productos</h1>
								<p>Listado de productos con los que contamos</p>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
					
					<div class="row pricing col-4" id="productos">
						

				
						
						

					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – PRICING TABLES : END ============================================================= -->
			
			
			
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
						<a href="avisolegal.php" class="txt-btn">Aviso legal</a>					</div><!-- /.col -->
					
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
		<script src="js/pruebascript.js"></script>


		
		
		
			<script>
						cargarDatos();
		
			</script>
			
	

	</body>
</html>