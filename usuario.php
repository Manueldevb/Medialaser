<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Registro Usuario</title>
</head>
<body background="imagenes/1.jpg" style="text-align:center;">

    <section class="form-register">
    <h4 >Ingrese Datos</h4>
    <form action="controladores/login.php" method="post">
    <br>
        <label for="number">Identificacion de Usuario</label>
        <br>
        <input type="number" name="number" required>
        <br>
        <br>
        <label for="txtnombre">Nombre de Usuario</label>
        <br>
        <input type="text" name="txtnombre" required>
        <br><br>
        <label for="txtapellido">Apellido de Usuario</label>
        <br>
        <input type="text" name="txtapellido" required>
        <br><br>
        <label for="txtdireccion">Direccion</label>
        <br>
        <textarea name="txtdireccion" id="" cols="30" rows="5"></textarea>
        <br><br>
        <label for="ci">Cedula de Identidad</label>
        <br>
        <input type="number" name="ci" required>
        <br><br>
        <label for="carg">Cargo</label>
        <br>
        <select name="select" id="">
            <option value="valor1">Empleado (encargado de Pacientes)</option>
            <option value="valor2">Medico (encargado de Medicacion)</option>
            <option value="valor3">Jefe Almacen (encargado de Almacen)</option>
        </select>
        <br><br>

        <label for="email">Correo</label>
        <br>
        <input type="text" name="Correo" required>
        <br><br>

        <label for="tel">Telefono</label>
        <br>
        <input type="number" name="tel" required>
        <br> <br>

        <label for="pass">Contraseña</label>
        <br>
        <input type="password" name="pass">
        <br><br>        

        <p><button type="submit"id="boton">Registrarse</button></p>
        <br></br>
        <p><a href="index.php"id="boton">Cancelar</a></p>
    </form>
  </section>

</body>
</html>
