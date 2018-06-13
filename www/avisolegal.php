<?php
session_start();
include 'php/db.php';

if(isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  $nombre = $_SESSION['nombre'];
  $apellidos = $_SESSION['apellidos'];
  $email = $_SESSION['email'];
  $numero = $_SESSION['numero'];
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
		
		<title>Contacto</title>
		
		<!-- Bootstrap Core CSS -->
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
			
			<!-- ============================================================= SECTION – CONTACT FORM ============================================================= -->
			
			<section id="contact-form">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Aviso legal</h1>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
					
					<div class="row">
						<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>DATOS IDENTIFICATIVOS</span></h3>
								<p class="text-small">En cumplimiento con el deber de informaci&oacuten recogido en art&iacuteculo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Informaci&oacuten y del Comercio Electr&oacutenico, a continuaci&oacuten se reflejan los siguientes datos: la empresa titular de dominio web es MIMAMIMELENA S.L. (en adelante MIMAMIMELENA), con domicilio a estos efectos en Calle Tajo s/n, Villaviciosa de Od&oacuten, Madrid, n&uacutemero de C.I.F.: X-3552154 inscrita en el Registro Mercantil de Villaviciosa de Od&oacuten.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>USUARIOS</span></h3>
								
								<p class="text-small">El acceso y/o uso de este portal de MIMAMIMELENA atribuye la condici&oacuten de USUARIO, que acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aqu&iacute reflejadas. Las citadas Condiciones ser&aacuten de aplicaci&oacuten independientemente de las Condiciones Generales de Contrataci&oacuten que en su caso resulten de obligado cumplimiento.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>USO DEL PORTAL</span></h3>
								
								<p class="text-small">www.mimamimelena.com proporciona el acceso a multitud de informaciones, servicios, programas o datos (en adelante, “los contenidos”) en Internet pertenecientes a MIMAMIMELENA o a sus licenciantes a los que el USUARIO pueda tener acceso. El USUARIO asume la responsabilidad del uso del portal. Dicha responsabilidad se extiende al registro que fuese necesario para acceder a determinados servicios o contenidos.</p>
								<p class="text-small">En dicho registro el USUARIO ser&aacute responsable de aportar informaci&oacuten veraz y l&iacutecita. Como consecuencia de este registro, al USUARIO se le puede proporcionar una contraseña de la que ser&aacute responsable, comprometi&eacutendose a hacer un uso diligente y confidencial de la misma. El USUARIO se compromete a hacer un uso adecuado de los contenidos y servicios (como por ejemplo servicios de chat, foros de discusi&oacuten o grupos de noticias) que Nombre de la empresa creadora del sitio web ofrece a trav&eacutes de su portal y con car&aacutecter enunciativo pero no limitativo, a no emplearlos para (i) incurrir en actividades il&iacutecitas, ilegales o contrarias a la buena fe y al orden p&uacuteblico; (ii) difundir contenidos o propaganda de car&aacutecter racista, xen&oacutefobo, pornogr&aacutefico-ilegal, de apolog&iacutea del terrorismo o atentatorio contra los derechos humanos; (iii) provocar daños en los sistemas f&iacutesicos y l&oacutegicos de Nombre de la empresa creadora del sitio web , de sus proveedores o de terceras personas, introducir o difundir en la red virus inform&aacuteticos o cualesquiera otros sistemas f&iacutesicos o l&oacutegicos que sean susceptibles de provocar los daños anteriormente mencionados; (iv) intentar acceder y, en su caso, utilizar las cuentas de correo electr&oacutenico de otros usuarios y modificaro manipular sus mensajes. Nombre de la empresa creadora del sitio web se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren el respeto a la dignidad de la persona, que sean discriminatorios, xen&oacutefobos, racistas, pornogr&aacuteficos, que atenten contra la juventud o la infancia, el orden o la seguridad p&uacuteblica o que, a su juicio, no resultaran adecuados para su publicaci&oacuten. En cualquier caso, MIMAMIMELENA no ser&aacute responsable de las opiniones vertidas por los usuarios a trav&eacutes de los foros, chats, u otras herramientas de participaci&oacuten.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>PROTECCI&OacuteN DE DATOS</span></h3>
								
								<p class="text-small">MIMAMIMELENA cumple con las directrices de la Ley Org&aacutenica 15/1999 de 13 de diciembre de Protecci&oacuten de Datos de Car&aacutecter Personal, el Real Decreto 1720/2007 de 21 de diciembre por el que se aprueba el Reglamento de desarrollo de la Ley Org&aacutenica y dem&aacutes normativa vigente en cada momento, y vela por garantizar un correcto uso y tratamiento de los datos personales del usuario. Para ello, junto a cada formulario de recabo de datos de car&aacutecter personal, en los servicios que el usuario pueda solicitar a info@MIMAMIMELENA.es, har&aacute saber al usuario de la existencia y aceptaci&oacuten de las condiciones particulares del tratamiento de sus datos en cada caso, inform&aacutendole de la responsabilidad del fichero creado, la direcci&oacuten del responsable, la posibilidad de ejercer sus derechos de acceso, rectificaci&oacuten, cancelaci&oacuten u oposici&oacuten, la finalidad del tratamiento y las comunicaciones de datos a terceros en su caso.</p>
								<p class="text-small">Asimismo, MIMAMIMELENA informa que da cumplimiento a la Ley 34/2002 de 11 de julio, de Servicios de la Sociedad de la Informaci&oacuten y el Comercio Electr&oacutenico y le solicitar&aacute su consentimiento al tratamiento de su correo electr&oacutenico con fines comerciales en cada momento.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>PROPIEDAD INTELECTUAL E INDUSTRIAL</span></h3>
								
								<p class="text-small">MIMAMIMELENA por s&iacute o como cesionaria, es titular de todos los derechos de propiedad intelectual e industrial desu p&aacutegina web, as&iacute como de los elementos contenidos en la misma (a t&iacutetulo enunciativo, im&aacutegenes, sonido, audio, v&iacutedeo, software o textos; marcas o logotipos, combinaciones de colores, estructura y diseño, selecci&oacuten de materiales usados, programas de ordenador necesarios para su funcionamiento, acceso y uso, etc.), titularidad de MIMAMIMELENA o bien de sus licenciantes.</p>
								<p class="text-small">Todos los derechos reservados. En virtud de lo dispuesto en los art&iacuteculos 8 y 32.1, p&aacuterrafo segundo, de la Ley de Propiedad Intelectual, quedan expresamente prohibidas la reproducci&oacuten, la distribuci&oacuten y la comunicaci&oacuten p&uacuteblica, incluida su modalidad de puesta a disposici&oacuten, de la totalidad o parte de los contenidos de esta p&aacutegina web, con fines comerciales, en cualquier soporte y por cualquier medio t&eacutecnico, sin la autorizaci&oacuten de MIMAMIMELENA. El USUARIO se compromete a respetar los derechos de Propiedad Intelectual e Industrial titularidad de MIMAMIMELENA. Podr&aacute visualizar los elementos del portal e incluso imprimirlos, copiarlos y almacenarlos en el disco duro de su ordenador o en cualquier otro soporte f&iacutesico siempre y cuando sea, &uacutenica y exclusivamente, para su uso personal y privado. El USUARIO deber&aacute abstenerse de suprimir, alterar, eludir o manipular cualquier dispositivo de protecci&oacuten o sistema de seguridad que estuviera instalado en el las p&aacuteginas de MIMAMIMELENA.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>EXCLUSI&OacuteN DE GARANT&IacuteAS Y RESPONSABILIDAD</span></h3>
								
								<p class="text-small">MIMAMIMELENA no se hace responsable, en ning&uacuten caso, de los daños y perjuicios de cualquier naturaleza que pudieran ocasionar, a t&iacutetulo enunciativo: errores u omisiones en los contenidos, falta de disponibilidad del portal o la transmisi&oacuten de virus o programas maliciosos o lesivos en los contenidos, a pesar de haber adoptado todas las medidas tecnol&oacutegicas necesarias para evitarlo.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>MODIFICACIONES</span></h3>
								
								<p class="text-small">MIMAMIMELENA se reserva el derecho de efectuar sin previo aviso las modificaciones que considere oportunas en su portal, pudiendocambiar, suprimir o añadir tanto los contenidos y servicios que se presten a trav&eacutes de la misma como la forma en la que &eacutestos aparezcan presentados o localizados en su portal.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>ENLACES</span></h3>
								
								<p class="text-small">En el caso de que en www.mimamimelena.com se dispusiesen enlaces o hiperv&iacutenculos hac&iacutea otros sitios de Internet, MIMAMIMELENA no ejercer&aacute ning&uacuten tipo de control sobre dichos sitios y contenidos. En ning&uacuten caso
								MIMAMIMELENA asumir&aacute responsabilidad alguna por los contenidos de alg&uacuten enlace perteneciente a un sitio web ajeno, ni garantizar&aacute la disponibilidad t&eacutecnica, calidad, fiabilidad, exactitud, amplitud, veracidad, validez y
								constitucionalidad de cualquier material o informaci&oacuten contenida en ninguno de dichos hiperv&iacutenculos u otros sitios de Internet.</p>
								<p class="text-small">Igualmente la inclusi&oacuten de estas conexiones externas no implicar&aacute ning&uacuten tipo de asociaci&oacuten, fusi&oacuten o participaci&oacuten con las entidades conectadas.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>DERECHO DE EXCLUSI&OacuteN</span></h3>
								
								<p class="text-small">MIMAMIMELENA se reserva el derecho a denegar o retirar el acceso a portal y/o los servicios ofrecidos sin necesidad de preaviso, a instancia propia o de un tercero, a aquellos usuarios que incumplan las presentes Condiciones Generales de Uso.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>GENERALIDADES</span></h3>
								
								<p class="text-small">MIMAMIMELENA perseguir&aacute el incumplimiento de las presentes condiciones as&iacute como cualquier utilizaci&oacuten indebida de su portal ejerciendo todas las acciones civiles y penales que le puedan corresponder en derecho.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>MODIFICACI&OacuteN DE LAS PRESENTES CONDICIONES Y DURACI&OacuteN</span></h3>
								
								<p class="text-small">MIMAMIMELENA podr&aacute modificar en cualquier momento las condiciones aqu&iacute determinadas, siendo debidamente publicadas como aqu&iacute aparecen.</p>
								<p class="text-small">La vigencia de las citadas condiciones ir&aacute en funci&oacuten de su exposici&oacuten y estar&aacuten vigentes hasta debidamente publicadas. que sean modificadas por otras.</p>
							</div><!-- /.col -->
							<div class="inner-top inner-right-sm">
								<h3 class="sidelines text-center"><span>LEGISLACI&OacuteN APLICABLE Y JURISDICCI&OacuteN</span></h3>
								
								<p class="text-small">La relaci&oacuten entre MIMAMIMELENA y el USUARIO se regir&aacute por la normativa española vigente y cualquier controversia se someter&aacute a los Juzgados y tribunales de la ciudad de Villaviciosa de Od&oacuten.</p>
							</div><!-- /.col -->						
								

					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – CONTACT FORM : END ============================================================= -->
						
		</main>
		
		<!-- ============================================================= MAIN : END ============================================================= -->
		
		
		<!-- ============================================================= FOOTER ============================================================= -->
		
		<footer id="footer" class="dark-bg">
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-4 inner">
						<h4>Qui&eacutenes somos</h4>
						<p>Somos una empresa dedicada a la peluquer&iacutea con el objetivo de llegar a la mayor cantidad de personas interesadas de este sector.</p>
						<a href="contacto.php" class="txt-btn">&iquestQuieres saber m&aacutes?</a><br>
						<a href="avisolegal.php" class="txt-btn">Aviso legal</a>					
					</div><!-- /.col -->
					
					<div class="col-md-4 inner">
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
					
					
					<div class="col-md-4 inner">
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
		
		<!-- JavaScripts placed at the end of the document so the pages load faster -->
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
		<script src="assets/js/viewport-units-buggyfill.js"></script>
		<script src="assets/js/scripts.js"></script>
	</body>
</html>