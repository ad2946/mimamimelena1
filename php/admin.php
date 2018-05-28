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
echo "<b><h1>Bienvenido administrador</h1></b><br>";
echo "<br><br> Seleccione una opción:<br>";

echo"<form action=\"administrar_usuarios.php\" method=\"post\">";

echo "<input type=\"radio\" name=\"opcion\" value=\"1\">Ver usuarios

<br>

<input type=\"radio\" name=\"opcion\" value=\"2\">Agregar nuevo usuario

<br>

<input type=\"radio\" name=\"opcion\" value=\"3\">Editar usuario\"
<br>

<input type=\"radio\" name=\"opcion\" value=\"4\">Borrar usuario\"";

echo "<p><input type=\"submit\" value=\"Enviar\"></p>
</form>";

?>