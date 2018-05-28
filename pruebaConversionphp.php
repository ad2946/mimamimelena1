<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Buscador</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">

    <script type="text/javascript" src="scripts.js"></script>

</head>
<body>
  <div class="row relative">
    <h1>Informaci&oacuten sobre cepillos</h1>
    <section>
      
   <input type="text" id="search" placeholder="Search" />
 
   <br>
 
   <br />
 
 
   <div id="display"></div>
 
      <ul id="listview" data-filter="true" data-filter-reveal="true" data-input="#autocomplete-input"></ul>
    </section>
  </div>

  <?php

$string = file_get_contents("cepillosM.json");
$json_array = json_decode($string, true);


foreach($json_array as $json){
   // you can access your key value like this if result is array
   echo '<div id="prodM">'.$json['id_Cepillo'].'<img src='.$json['imagen'].' height="100" width="100">'.'<br><strong>Nombre del producto:</strong>'.$json['nombre'].'<br><strong>Precio: </strong>'.$json['precio'].'€'.'</div>'; 
}

?>



</body>
</html>


