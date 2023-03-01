<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar Sesion</title>
</head>
<body background="imagenes/1.jpg" style="background-repeat: no-repeat;background-size: cover;">
    <div class="col-xs-12 col-md-4" style="margin: auto;">
        <section class="form-register">
        <h4>Iniciar Sesion</h4>
        <form action="controladores/login.php" method="post">
            <h5>MEDILASER</h5>
            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
            <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
            <label for=""><?php if(isset($_GET['msj']) && $_GET['msj'] =='nouser') echo "El usuario no existe"; ?></label>
            <label for=""><?php if(isset($_GET['msj']) && $_GET['msj'] =='nopass') echo "Contraseña erronea"; ?></label>
            <!-- isset = Si existe -->
            <p><button class="btn btn-info" type="submit"id="boton">Ingresar</button></p>
            <br></br>
            
        </form>
      </section>
    </div>
</body>
</html>
