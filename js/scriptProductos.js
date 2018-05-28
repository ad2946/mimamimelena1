$( document ).ready(function() {
	productoM();
});

function productoM(){
	var request;
	if (window.XMLHttpRequest) {
		request = new XMLHttpRequest();
	} else {
		request = new ActiveXObject("Microsoft.XMLHTTP");
	}
	request.open('GET', 'productosM.json');
	request.onreadystatechange = function() {
		if ((request.readyState===4) && (request.status===200)) {
			var items = JSON.parse(request.responseText);
	        console.log(request.responseText);
	        var output = "";
			for (var key in items) {
				output += '<div id="prodM' + items[key].id_productoM + '">'+'<img src="' + items[key].imagen +'" height="100" width="100">'+ '<br><strong>Nombre del producto:</strong> ' + items[key].nombre +'<br><strong>Precio: </strong>'+ items[key].precio+'€'+'</div>';
			}
	        console.log(output);
			document.getElementById('listview2').innerHTML = output;
		}
	}
	request.send();
}
