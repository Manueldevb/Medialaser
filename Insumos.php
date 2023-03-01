<?php
    session_start();
    if($_SESSION['access'] == true && $_SESSION['userID']){

    require_once 'modelos/menu.php';
    require_once 'modelos/general.php';
    
    $menu = new menu($_SESSION['usuario'], 'Registro');
    $cons = new general();
    $insumos = $cons->listinsumo();
    
    echo $menu->navbar();
    $sentencia = $cons->lista();
    
?>
<link rel="stylesheet" href="css/style.css">
<div class="container my-3">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 py-4 bg-white">
            <h2>Almacen</h2>
            <form id="formulario">
             
                <div class="mb-3">
                    <label for="nombre" class="form-label">ID DEL INSUMO</label>
                    <input type="text" class="form-control" id="insumo" name="insumo" autofocus />
                    <label for="nombre" class="form-label">NOMBRE DEL INSUMO</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" autofocus />
                    <!--PARA HACER MÁS RAPIDO Y EFECTIVO EL EDITAR SE TRAE SIEMPRE EL ID Y SE GUARDA EN UN INPUT ESCONDIDO-->
                    <!-- <input hidden name="id" id="id"> -->
                </div>
                <div class="mb-3">
                    <!-- esete no hay necesidad de enviarlo-->
                    <label for="programadores" class="form-label">USUARIO REGISTRANTE</label>
                    <input type="text" class="form-control" id="usu" name="Usureg" disabled/>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-info" onclick="consulta()">Buscar</button>
                    <button class="btn btn-warning btnupdate" style="display: none;" onclick="actualizar()">Actualizar</button>
                    <button class="btn btn-success" onclick="crear()">Crear</button>
                    <!-- <button class="btn btn-danger btnupdate"style="display: none;" onclick="eliminar()">Eliminar</button> -->
                </div>

            </form>
        </div>
     <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 py-4 bg-white">
            <h2>Insumos</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID DEL INSUMO</th>
                            <th scope="col">NOMBRE DEL INSUMO</th>
                            <th scope="col">USUARIO</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                foreach($sentencia as $dato){ 
                            ?>
                        <tr>
                            <td class="centrado"><?php echo $dato['id']; ?></td>
                            <td class="centrado"><?php echo $dato['insumos']; ?></td>
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
<script src="js/insumo.js"></script>
</body>
</html>
<?php
    } else{
        header('Location: index.php');
    }        
?>