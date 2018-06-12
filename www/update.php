<?php
session_start();

if(isset($_SESSION['usuario'])) {
	$id = $_SESSION['id'];
}

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

if(isset($_POST['user'])) { 	
	$username = $_POST["user"];
}
if(isset($_POST['nombre'])) { 
	$nombre = $_POST["nombre"];
}
if(isset($_POST['apellidos'])){
	$apellidos = $_POST["apellidos"];
}
if(isset($_POST['email'])){
	$email = $_POST["email"];
}
if(isset($_POST['numero'])){
	$numero = $_POST["numero"];
}

$query = "UPDATE `usuario` SET `nombre`='".$nombre."',`apellidos`='".$apellidos."',`usuario`='".$username."',`email`='".$email."',`numero`='".$numero."' WHERE id_usuario = ".$id;

$user_set = mysqli_query($connection, $query);

if ($connection->query($query) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}

$connection->close();

$_SESSION["nombre"] = $nombre;
$_SESSION["apellidos"]=$apellidos;
$_SESSION["email"] =$email;
$_SESSION["numero"] = $numero;
$_SESSION["usuario"] = $username;

header("Location: index.php");
?>