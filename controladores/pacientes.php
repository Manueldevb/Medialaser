<?php 
	require '../modelos/pacientes.php';
	session_start();
	$busqueda = new pacientes();

	if($_GET['tipo'] == 'consulta'){
		$resultado = $busqueda->consultarpaciente($_GET['cedula']);
		echo json_encode($resultado);
	}
	if($_GET['tipo'] == 'actualizar'){
		//Usuario registrante
		$user = $_SESSION['userID'];

		$resultado = $busqueda->modificarpaciente($user);
	}
	if($_GET['tipo'] == 'eliminar'){

		$resultado = $busqueda->eliminarpaciente();
	}
	if($_GET['tipo'] == 'crear'){
		$user = $_SESSION['userID'];
		$busqueda->crearpaciente($user);
		echo "hola";
	}
?>