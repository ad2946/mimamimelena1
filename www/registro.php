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
function find_user_by_username($username,  $connection) {
		
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		
		$query  = "SELECT * ";
		$query .= "FROM usuario ";
		$query .= "WHERE usuario = '$username'";
		$query .= "LIMIT 1";  //Como usename es primario no lo necesito
		echo "$query <br>";
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

function attempt_login($username, $connection) {
		$user = find_user_by_username($username, $connection);
		if ($user) {
			
			//user encontrado
			
			return $user;
    }
			
		 else {
			// user not found
			//echo "Usuario no encontrado";
			return false;
		}
	}
	
	
	
?>
<?php

if(isset($_POST['nombre'])) { 
    // check if the username has been set
	$nombre = $_POST["nombre"];
}
if(isset($_POST['apellidos'])) { 
    // check if the username has been set
	$apellidos = $_POST["apellidos"];
}
if(isset($_POST['email'])) { 
    // check if the username has been set
	$email = $_POST["email"];
}
if(isset($_POST['username'])) { 
    // check if the username has been set
	$username = $_POST["username"];
}
if(isset($_POST['password'])) { 
    // check if the username has been set
	$password = $_POST["password"];
}
if(isset($_POST['numero'])) { 
    // check if the username has been set
	$numero = $_POST["numero"];
}


$found_user = attempt_login($username, $connection);
$tipo=0;
$tablename ="usuario";
if ($found_user) {
      header("Location: " . "usuario_existe.php");	
}
     
else {
            //Encriptar password
            $pass_s = password_hash($password, PASSWORD_DEFAULT);
            $query  = "INSERT INTO `$tablename` (";
			$query .= "  `nombre`, `apellidos`,`usuario`, `password`,`email`,`numero`";
			$query .= ") VALUES (";
			$query .= " '$nombre', '$apellidos' ,'$username', '$pass_s', '$email', '$numero' ";
			$query .= ")";
	
			$result = mysqli_query($connection, $query);

			if ($result) {
				echo "El usuario se ha agregado correctamente";
			} else {
				die("Database query failed. " . mysqli_error($connection));
	}
}
?>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>