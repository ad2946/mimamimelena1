<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			define("DB_SERVER", "localhost");
			define("DB_USER", "root");
			define("DB_PASS", "");
			define("DB_NAME", "mimamimelena");
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
		function find_user_by_username($username, $password, $connection) {
			$safe_username = mysqli_real_escape_string($connection, $username);
			$query  = "SELECT * ";
			$query .= "FROM usuario ";
			$query .= "WHERE usuario = '$username'";
			$query .= "LIMIT 1 ";
			$user_set = mysqli_query($connection, $query);
			if (!$user_set) {
				die("Database query failed.");
			}
			if($user = mysqli_fetch_assoc($user_set)) {
				return $user;
			} else {
				return null;
			}
		}

		function attempt_login($username, $password, $connection) {
			$user = find_user_by_username($username,$password, $connection);
			if ($user) {		
				return $user;
	    	}
				
			 else {
				// user not found
				echo '<script> alert("Usuario o contraseña incorrectos.");</script>';				
				return false;
			}
		}
	
		function infoUsuario($username){
			require("php/db.php");
			$sel_query="SELECT * FROM usuario WHERE usuario='$username' LIMIT 1";
			$result = mysqli_query($con,$sel_query);
			$json = "[ "; // se deja espacio para que al quitar ?ltimo car?cter no rompa si no hay resultados
			while($row = mysqli_fetch_assoc($result)) {
				$_SESSION["nombre"] = $row["nombre"];
				$_SESSION["apellidos"]=$row["apellidos"];
				$_SESSION["email"] =$row["email"];
				$_SESSION["numero"] = $row["numero"];
			    //$json = $json.'{"nombre":'.$row["nombre"].',"apellidos":'.$row["apellidos"].',"usuario":"'.$row["usuario"].'","email":'.$row["email"].',"numero":"'.$row["numero"].'"},';
			} 
			$json = substr($json, 0, -1)."]"; // se quita la ?ltima coma y se cierra el array
			return $json;
		}
		?>


		<?php
		if(isset($_POST['usuario'])) { 	
			$_SESSION['usuario'] = $_POST["usuario"];	
			$username = $_POST["usuario"];
		}
		if(isset($_POST['password'])) { 
		    // check if the username has been set
			$password = $_POST["password"];
		}


		$found_user = attempt_login($username, $password, $connection);
		    if ($found_user) {
		      // Success
					if(password_verify($password,$found_user["password"])){
						$json = infoUsuario($username);
		                header("Location: " . "index.php");
		             	echo $json;
		                //header("Location: " . "panel.php");
		            }
		            else{
		                //header("Location: " . "error_login.php");
		            }
		    } else {
		      // Failure
			  header("Location: " . "inicioregistro.php");
		    }
		?>

		<?php
		  // 5. Close database connection
		  mysqli_close($connection);
		?>
</body>
</html>



