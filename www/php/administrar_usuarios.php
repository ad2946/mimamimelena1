 <?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "usuarios");

  // 1. Crear conexión con la BBDD
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("La conexión con la BBDD ha fallado: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
 <?php 
 $tablename ="data_users";
 
 if (isset($_POST['opcion'])){ 
	$opcion = $_POST['opcion'];
	
	switch($opcion){
		case '1':
			echo "<h2> Ver usuarios </h2>";
			
			$query = "SELECT * FROM `$tablename`" ;
			$result = mysqli_query($connection, $query);

			if ($result) {
				echo "Conexión a BBDD exitosa <br>";
			} else {
				die("Database query failed. " . mysqli_error($connection));
			}
			echo "<BR>";
			if ($result->num_rows > 0) {
				while($lista_usuarios = $result->fetch_assoc()) {
					echo "Usuario: " . $lista_usuarios["usuario"]. " - - ". $lista_usuarios["nombre"] . " - - ". $lista_usuarios["email"] . " - - ". $lista_usuarios["tipo"] ."<br>";
				}
			} else {
				echo "No hay usuarios";
			}
			echo "<br><br>";
			break;
			
		case '2':
			
			echo "<h2> Agregar nuevo usuario </h2>";
			echo"<form action=\"agregar_usuario.php\" method=\"post\">
			<p>Usuario: <input type=\"text\" name=\"usuario\" /></p>
			<p>Password: <input type=\"text\" name=\"pass\" /></p>
			<p>Nombre: <input type=\"text\" name=\"nombre\" /></p>
			<p>Email: <input type=\"text\" name=\"email\" /></p>
			<p>Tipo: <input type=\"number\" min=\"0\" max=\"1\" name=\"tipo\" /></p>
			<p><input type=\"submit\" /></p>
			</form>";
			
			break;
			
		case '3':
			echo "<h2> Editar usuario</h2>";
			echo "Introduzca los datos del usuario que desea editar: <br><br>";
			echo"<form action=\"editar_usuario.php\" method=\"post\">
			<p>Usuario: <input type=\"text\" name=\"usuario\" /></p>
			<p>Password: <input type=\"text\" name=\"pass\" /></p>
			<p>Nombre: <input type=\"text\" name=\"nombre\" /></p>
			<p>Email: <input type=\"text\" name=\"email\" /></p>
			<p>Tipo: <input type=\"number\" min=\"0\" max=\"1\" name=\"tipo\" /></p>
			<p><input type=\"submit\" /></p>
			</form>";
			break;
		case '4':
			echo "<h2> Borrar usuario </h2>";
			echo "Introduzca el usuario que desea borrar: <br><br>";
			echo"<form action=\"borrar_usuario.php\" method=\"post\">
			<p>Usuario: <input type=\"text\" name=\"usuario\" /></p>
			<p><input type=\"submit\" /></p>
			</form>";
			break;
		default:
			echo "WARNING: No se ha marcado ninguna opción";
	}
 }
 ?>