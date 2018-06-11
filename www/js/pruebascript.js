function cargarDatos () {
	console.log("Se inicia la carga de datos");
	
	//se solicitan las provincias...
	$.get( "cargarDatosbasedatos.php", function( data ) {
		console.log( "datos descargados: " + data );
		
		// pasar de String a un array json
		var json = JSON.parse(data);
		
		console.log(json);

		json.forEach(function(obj) { 
			opcion ="<div class='col-lg-3 col-sm-6 inner-top-sm animated fadeInUp'><div class='plan'>"+
			"<header><img src=\""+obj.imagen+"\"></header>"+"<ul class='features'><li><strong>Nombre:</strong> "+obj.nombre+"</li><li>Precio: "+
			obj.precio+"€</li><li><button type='button' class='btn btn-info' data-toggle='collapse' data-target='#descripcion"+obj.id_productoM+"'>Descripci&oacuten"+
			"</button><div id='descripcion"+obj.id_productoM+"' class='collapse'>"+obj.Descripcion+"</div>"+
			"</li></ul></div></div>"
			$("#productos").append(opcion);
		});
		
	});
}

/*
<li>Categoria: "+obj.tipo_producto+"</li>
*/






