<?php
    session_start();
    if($_SESSION['access'] == true && $_SESSION['userID']){

    require_once 'modelos/menu.php';
    require_once 'modelos/general.php';
    
    $menu = new menu($_SESSION['usuario'], 'Registro');
    $cons = new general();
    $insumos = $cons->listinsumos();

    echo $menu->navbar();
    $sentencia = $cons->listamedicacion();

?>
<link rel="stylesheet" href="css/style.css">
<div class="container my-3">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 py-4 bg-white">
            <h2>Medicamentos</h2>
            <form id="formulario">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">CEDULA DEL PACIENTE</label>
                    <input type="text" class="form-control" id="cedula" name="cedula">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">NOMBRE DEL PACIENTE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" autofocus />
                    <!--PARA HACER MÁS RAPIDO Y EFECTIVO EL EDITAR SE TRAE SIEMPRE EL ID Y SE GUARDA EN UN INPUT ESCONDIDO-->
                    <input hidden name="id" id="id">
                    <input hidden name="pacienteid" id="pacienteid">

                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-info" onclick="buscar2()">Buscar Paciente</button>
                </div>
                <br>
                <div class="mb-3">
                    <label for="programadores" class="form-label">INSUMO</label>
                    <select class="form-control" id="insumo" name="insumo">
                        <option>Seleccionar</option>
                        <?php for ($i=0; $i < count($insumos); $i++) { ?> 
                        <option value="<?= $insumos[$i]['id'] ?>"><?= $insumos[$i]['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="programadores" class="form-label">FECHA DEL MEDICAMENTO</label>
                    <input type="date" class="form-control" id="Fecha" name="Fecha" />
                </div>
                <div class="mb-3">          
                    <label for="programadores" class="form-label">DESCRIPCION</label>
                    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                </div><div class="mb-3">
                    <!-- esete no hay necesidad de enviarlo-->
                    <label for="programadores" class="form-label">USUARIO REGISTRANTE</label>
                    <input type="text" class="form-control" id="usu" name="Usureg" disabled/>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-info" onclick="buscar()">Buscar Formula</button>
                    <button class="btn btn-warning btnupdate" style="display: none;" onclick="actualizar()">Actualizar</button>
                    <button class="btn btn-success" onclick="crear()">Crear</button>
                    <button class="btn btn-danger btnupdate"style="display: none;" onclick="eliminar()">Eliminar</button>
                </div>

            </form>
        </div>
     <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 py-4 bg-white">
            <h2>Insumos en Pacientes</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">CEDULA</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">INSUMO</th>
                            <th scope="col">FECHA DEL MEDICAMENTO</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">USUARIO</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                foreach($sentencia as $dato){ 
                            ?>
                        <tr>
                            <td class="centrado"><?php echo $dato['Cedula']; ?></td>
                            <td class="centrado"><?php echo $dato['Paciente']; ?></td>
                            <td class="centrado"><?php echo $dato['insumos']; ?></td>
                            <td class="centrado"><?php echo $dato['fechamed']; ?></td>
                            <td class="centrado"><?php echo $dato['descripcion']; ?></td>
                            <td class="centrado"><?php echo $dato['Usuarios']; ?></td>
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
<script src="js/medicacion.js"></script>
</body>
</html>
<?php
    } else{
        header('Location: index.php');
    }        
?>