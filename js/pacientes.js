function buscar(argument) {
	event.preventDefault();
	var cedula = $("#cedula").val();
	if (!cedula) {
		alert("Por favor ingresa un numero de cedula")		
	}
	else {
		// Jquery sirve para abrevivar javascript y Ajax sirve como Post y Get pero sin recargar la pagina
		$.get("controladores/pacientes.php", { tipo: 'consulta', cedula: cedula } ).done(function(data) {
	    	data = JSON.parse(data);
	    	console.log(data)
	    	$('.btnupdate').show();
	    	$("#id").val(data['id']);
	    	$("#Nombre").val(data['nombre']);
	    	$("#Apellido").val(data['apellido']);
	    	$("#idund").val(data['idund']).change();
	    	$("#Fecha").val(data['fecha']);
	    	$("#observaciones").html(data['observaciones']);
	    	$("#usu").val(data['Usuario']);
	  	})
	}
}

function actualizar(argument) {
	event.preventDefault();

	$.post("controladores/pacientes.php?tipo=actualizar", $('#formulario').serializeArray() ).done(function(data) {
		window.location.reload(); //si es para que recarge eso
	});
}

function eliminar(argument) {
	event.preventDefault();

	var id = $("#id").val();

	$.post("controladores/pacientes.php?tipo=eliminar", { id: id} ).done(function(data) {
		window.location.reload(); 
	});
}
function crear(argument) {
	event.preventDefault();

	$.post("controladores/pacientes.php?tipo=crear", $('#formulario').serializeArray() ).done(function(data) {
		window.location.reload();
	});
}