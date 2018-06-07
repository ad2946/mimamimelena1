<?php

require("php/db.php");

$sel_query="SELECT * FROM producto";

$result = mysqli_query($con,$sel_query);


$json = "[ "; // se deja espacio para que al quitar ?ltimo car?cter no rompa si no hay resultados
    while($row = mysqli_fetch_assoc($result)) { 
    $json = $json.'{"id_productoM":'.$row["id_Producto"].',"tipo_producto":'.$row["id_Categoria"].',"nombre":"'.$row["Nombre"].'","imagen":"'.$row["Imagen"].'","precio":'.$row["Precio"].',"Descripcion":"'.$row["Descripcion"].'"},';
    } 

$json = substr($json, 0, -1)."]"; // se quita la ?ltima coma y se cierra el array

// se devuelve el resultado
echo utf8_encode($json);?>