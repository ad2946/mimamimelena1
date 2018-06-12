<?php
	session_start();
	include 'php/db.php';
	if(isset($_SESSION['usuario'])){
	//echo '<script> window.location="index2.php"; </script>';
	}
?>
<html>
<head>
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
								<li><a href="index.html" class="scroll-to" data-anchor-offset="0">HOME</a></li>
							</ul><!-- /.nav -->
							
							<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
							
						</div><!-- /.container -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.yamm -->
			</div><!-- /.navbar -->
		</header>
		
		
		<!-- ============================================================= HEADER : END ============================================================= -->

		
	<main>
		<section id="hero">
			<div class="container inner">

				<div class="col-sm-6 outer-top-md. inner-right-sm">
					<h2>Iniciar Sesi&oacuten</h2>

				    <form action="validar.php" method="post">
				      <p>Usuario:
				        <input type="text" name="usuario" value="" required />
				      </p>
				      <p>Contrase&ntildea:
				        <input type="password" name="password" value="" required/>
				      </p>
				      <input type="submit" name="submit" value="Entrar" />
				    </form>
			
				<a href="registro.html" > Registrarse</a>
				</div>
				<div class="col-sm-6 outer-top-md inner-left-sm border-left">
					<h2>Registrarse</h2>
					<form action="registro.php" method="post">
		              <p>Nombre:
		                <input type="text" name="nombre" value="" required/>
		              <p>Apellidos:
		                <input type="text" name="apellidos" value="" required/>
		              <p>Email:
		                <input type="email" name="email" value="" required/>
		              <p>Numero:
		                <input type="text" name="nombre" value="" required/>
		              <p>Username:
		                <input type="text" name="username" value="" required/>
		              </p>
		              <p>Password:
		                <input type="password" name="password" value="" required/>
		              </p>
		              <input type="button" name="registro" value="Registrarse" />
				</div>
			</div>
		</section>
	</main>



		<!-- JavaScripts placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.easing.1.3.min.js"></script>
		<script src="assets/js/jquery.form.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
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
</body>
</html>