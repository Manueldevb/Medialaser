<?php 
    session_start();
    require '../modelos/usuarios.php';

    $usuario = $_POST['correo'];
    $contrasena = $_POST['password'];

    $obj = new usuarios($usuario);

    //1. NECESITO SABER SI EL USUARIO EXISTE
    $consulta = $obj->consultarusuario();
    if(!$consulta) header('Location: ../index.php?msj=nouser');
    
    //2. NECESITO SABER SI LA CONTRASEÑA ES IGUAL
    if($consulta['clave'] == $contrasena){

        $_SESSION['usuario'] = $consulta['Usuarionombre'];
	    $_SESSION['userID'] = $consulta['id'];
	    $_SESSION['access'] = true;
        
        header ('location: ../home.php');
    } 
    else header('Location: ../index.php?msj=nopass');
    
    
?>