function consulta(argument) {
	event.preventDefault();
	var insumo = $("#insumo").val();
	if (!insumo) {
		alert("Por favor ingresa un numero de insumo")		
	}
	else {
		// Jquery sirve para abrevivar javascript y Ajax sirve como Post y Get pero sin recargar la pagina
		$.get("controladores/insumos.php", { tipo: 'consulta', 	insumo: insumo } ).done(function(data) {
	    	data = JSON.parse(data);
	    	console.log(data)
	    	$('.btnupdate').show();
	    	$("#insumo").val(data['id']);
	    	$("#nombre").val(data['nombre']);
	    	$("#usu").val(data['Usuarios']);
	  	})
	 }

}

function actualizar(argument) {
	event.preventDefault();

	$.post("controladores/insumos.php?tipo=actualizar", $('#formulario').serializeArray() ).done(function(data) {
		window.location.reload(); //si es para que recarge eso
	});
}

function eliminar(argument) {
	event.preventDefault();

	var id = $("#insumo").val(); //valor del nombre del ID 

	$.post("controladores/insumos.php?tipo=eliminar", { id: id} ).done(function(data) {
		window.location.reload(); 
	});
}
function crear(argument) {
	event.preventDefault();

	$.post("controladores/insumos.php?tipo=crear", $('#formulario').serializeArray() ).done(function(data) {
		window.location.reload();
	});
}