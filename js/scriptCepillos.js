$( document ).ready(function() {
	Cepillos();
});

function Cepillos(){
	var request;
	if (window.XMLHttpRequest) {
		request = new XMLHttpRequest();
	} else {
		request = new ActiveXObject("Microsoft.XMLHTTP");
	}
	request.open('GET', 'cepillosM.json');
	request.onreadystatechange = function() {
		if ((request.readyState===4) && (request.status===200)) {
			var items = JSON.parse(request.responseText);
	        console.log(request.responseText);
	        var output = "";
			for (var key in items) {
				output += '<div id="cepillo' + items[key].id_Cepillo + '">'+'<img src="' + items[key].imagen +'" height="100" width="100">'+ '<br><strong>Nombre del producto:</strong> ' + items[key].nombre +'<br><strong>Precio: </strong>'+ items[key].precio+'€'+'</div>';
			}
	        console.log(output);
			document.getElementById('listview').innerHTML = output;
		}
	}
	request.send();
}