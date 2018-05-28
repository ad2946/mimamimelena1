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
	$query  = "UPDATE `$tablename` SET ";
	$query .= "`password` = '$pass', ";
	$query .= "`nombre` = '$nombre', ";
	$query .= "`email` = '$email', ";
	$query .= "`tipo` = '$tipo' ";
	$query .= "WHERE `$tablename`.`usuario`='$usuario';";
	echo "<br>$query<br>";
	
	$result = mysqli_query($connection, $query);
	
	
	
	if ($result && mysqli_affected_rows($connection) == 1) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Subject update failed";
		die("Database query failed. " . mysqli_error($connection));
	}
?>