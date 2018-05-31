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
 ?>
<?php 

			if(isset($_POST['usuario'])) { 
				$usuario = $_POST["usuario"];
			}
			if(isset($_POST['pass'])) { 
				$pass = $_POST["pass"];
			}
			if(isset($_POST['nombre'])) { 
				$nombre = $_POST["nombre"];
			}
			if(isset($_POST['email'])) { 
				$email = $_POST["email"];
			}
			if(isset($_POST['tipo'])) { 
				$tipo = $_POST["tipo"];
			}
			
			
			$query  = "INSERT INTO `$tablename` (";
			$query .= "  `usuario`, `password`,`nombre`, `email`,`tipo`";
			$query .= ") VALUES (";
			$query .= " '$usuario', '$pass', '$nombre', '$email', '$tipo' ";
			$query .= ")";
			echo $query;
	
			$result = mysqli_query($connection, $query);

			if ($result) {
				echo "El usuario se ha agregado correctamente";
			} else {
				die("Database query failed. " . mysqli_error($connection));
	}
//}
//else{
//	header("Location: " . "admin.php");
//}
			
?>