<?php
if (isset($_POST['search'])) {
$nombre = $_POST['search'];
$string = file_get_contents("cepillosM.json");
$json_array = json_decode($string, true);

echo '<ul>';

foreach($json_array as $json){

    


	?>



	<li onclick='fill("<?php echo $json['nombre'] ?>")'>

   <a>


       <?php 
		
			if (strpos($json['nombre'], $nombre)){

			echo $json['nombre'];
		}


			 ?>

   </li></a>


   <?php

}}

?>

</ul>