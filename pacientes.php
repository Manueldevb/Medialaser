<?php
    session_start();
    if($_SESSION['access'] == true){

    require_once 'modelos/menu.php';
    require_once 'modelos/general.php';
    
    $menu = new menu($_SESSION['usuario'], 'Registro');
    $cons = new general();

    $unidades = $cons->listunidades();

    echo $menu->navbar();
    $sentencia = $cons->listadepacientes();

?>
<link rel="stylesheet" href="css/style.css">
<div class="container my-3">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 py-4 bg-white">
            <h2>Pacientes</h2>
            <form id="formulario">
                <div class="mb-3">
                    <label for="nombre" class="form-label">CEDULA</label>
                    <input type="number" class="form-control" id="cedula" name="cedula" autofocus />
                    <!--PARA HACER MÁS RAPIDO Y EFECTIVO EL EDITAR SE TRAE SIEMPRE EL ID Y SE GUARDA EN UN INPUT ESCONDIDO-->
                    <input hidden name="id" id="id">

                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre">
                </div>
                <div class="mb-3">
                    <label for="programadores" class="form-label">APELLIDO</label>
                    <input type="text" class="form-control" id="Apellido" name="Apellido" />
                </div>
                <div class="mb-3">
                    <label for="programadores" class="form-label">UNIDAD</label>
                    <select class="form-control" id="idund" name="Unidad">
                        <option>Seleccionar</option>
                        <?php for ($i=0; $i < count($unidades); $i++) { ?> 
                        <option value="<?= $unidades[$i]['id'] ?>"><?= $unidades[$i]['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="programadores" class="form-label">FECHA</label>
                    <input type="date" class="form-control" id="Fecha" name="Fecha" />
                </div><div class="mb-3">
                    <label for="programadores" class="form-label">OBSERVACIONES</label>
                    <textarea class="form-control" id="observaciones" name="Observaciones"></textarea>
                </div><div class="mb-3">
                    <!-- esete no hay necesidad de enviarlo-->
                    <label for="programadores" class="form-label">USUARIO REGISTRANTE</label>
                    <input type="text" class="form-control" id="usu" name="Usureg" disabled />
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-info" onclick="buscar()">Buscar</button>
                    <button class="btn btn-warning btnupdate" style="display: none;" onclick="actualizar()">Actualizar</button>
                    <button class="btn btn-success" onclick="crear()">Crear</button>
                    <button class="btn btn-danger btnupdate"style="display: none;" onclick="eliminar()">Eliminar</button>
                </div>

            </form>
        </div>
     <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 py-4 bg-white">
            <h2>Pacientes en la base de datos</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">CEDULA</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Unidad</th>
                            <th scope="col">FECHA</th>
                            <th scope="col">OBSERVACIONES</th>
                            <th scope="col">Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                foreach($sentencia as $dato){ 
                            ?>
                        <tr>
                            <td class="centrado"><?php echo $dato['ci']; ?></td>
                            <td class="centrado"><?php echo $dato['nombre']; ?></td>
                            <td class="centrado"><?php echo $dato['apellido']; ?></td>
                            <td class="centrado"><?php echo $dato['Unidad']; ?></td>
                            <td class="centrado"><?php echo $dato['fecha']; ?></td>
                            <td class="centrado"><?php echo $dato['observaciones']; ?></td>
                            <td class="centrado"><?php echo $dato['Usuario']; ?></td>

                            <?php 
                                }
                            ?>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
echo $menu->footer();
?>
<script src="js/pacientes.js"></script>
</body>
</html>
<?php
    } else{
        header('Location: index.php');
    }        
?>