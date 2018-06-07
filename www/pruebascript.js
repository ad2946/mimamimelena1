function cargarDatos () {
	console.log("Se inicia la carga de datos");
	
	//se solicitan las provincias...
	$.get( "cargarDatosbasedatos.php", function( data ) {
		console.log( "datos descargados: " + data );
		
		// pasar de String a un array json
		var json = JSON.parse(data);
		
		console.log(json);

		json.forEach(function(obj) { 
			opcion ="<div class='col-lg-3 col-sm-6 inner-top-sm animated fadeInUp'><div class='plan'><header><img src=\""+obj.imagen+"\"></header>"+"<ul class='features'><li>Nombre: "+obj.nombre+"</li><li>Precio: "+obj.precio+"€</li><li>Descripción:<br><button id='button' onclick='clickDescripcion()'></button><p id='descripcion'>"+obj.Descripcion+"</p></li><li>Categoria: "+obj.tipo_producto+"</li></ul></div></div>"
			$("#productos").append(opcion);
		});
		
	});
}


function clickDescripcion() {
    var x = document.getElementById("descripcion");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}



