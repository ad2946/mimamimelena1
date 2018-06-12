$(document).ready(function(){
	cargarInicio();
});

function cargarInicio(){
	console.log("Cargando Inicio");
	
	//se solicitan las provincias...
	$.get( "login_encriptado.php", function( data ) {
		console.log( "datos descargados: " + data );
		
		// pasar de String a un array json
		var json = JSON.parse(data);
				
		//console.log(json);
		json.forEach(function(obj) { 
			opcion = "<a href='#'> "+obj.usuario+"</a>"
			$("#inicioSesion").append(opcion);
		});
	});
}