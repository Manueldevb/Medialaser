<?php 
	session_start();
	require '../modelos/insumos.php';
	$busqueda = new insumos();

	if($_GET['tipo'] == 'consulta'){
		$resultado = $busqueda->consultarinsumo($_GET['insumo']);
		echo json_encode($resultado);
	}
	if($_GET['tipo'] == 'actualizar'){
		//Usuario registrante
		$user = $_SESSION['userID'];

		$resultado = $busqueda->modificarinsumo($user);
	}
	if($_GET['tipo'] == 'eliminar'){

		$resultado = $busqueda->eliminarinsumo();
	}
	if($_GET['tipo'] == 'crear'){
		
		$user = $_SESSION['userID'];
		$busqueda->crearinsumo($user);
		
	}
?>