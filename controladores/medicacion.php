<?php 
	session_start();
	require '../modelos/medicacion.php';
	$busqueda = new medicacion();

	if($_GET['tipo'] == 'consulta'){
		$resultado = $busqueda->consultarmedicacion($_GET['cedula']);
		echo json_encode($resultado);
	}
	if($_GET['tipo'] == 'consulta2'){
		$resultado = $busqueda->consultarpaci($_GET['cedula2']);
		echo json_encode($resultado);
	}
	if($_GET['tipo'] == 'actualizar'){
		//Usuario registrante
		$user = $_SESSION['userID'];
		echo "HOLA";
		$resultado = $busqueda->modificarmed($user);
	}
	if($_GET['tipo'] == 'eliminar'){

		$resultado = $busqueda->eliminarmed();
	}
	if($_GET['tipo'] == 'crear'){
		$user = $_SESSION['userID'];
		$busqueda->crearmed($user);
		echo "hola";
	}
?>