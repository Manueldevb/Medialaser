<?php
    session_start();
    if($_SESSION['access'] == true && $_SESSION['userID']){

    require_once 'modelos/menu.php';
    $menu = new menu($_SESSION['usuario'], 'Inicio');

    echo $menu->navbar();
?>

        <div style="text-align:center ; background-color: rgb(215, 238, 238);" class="cool">
            <img src="imagenes/siempre.png" alt="" src="imagenes/usuario.png"> 
        </div>
        <br>
        <br>
        <br>
        <br>
        <div style="text-align:center ; background-color: rgb(208, 238, 243);">
            <img src="imagenes/propa.png" alt="" height="70" width="600" ;">
            <h2 style="text-align:center ;">Ahora cuenta con una plataforma comoda y agil que facilita su trabajo, hecha bajo los requerimientos de la empresa y para su mejora en la prestacion de servicios al necesitado</h2>
        </div>
        <br>
        <br>
        <div style="text-align: center ; background-color: rgb(242, 248, 246);">
            <img src="imagenes/siguenos.png" alt="">
        </div>
        <div style="text-align: center ; background-color: rgb(221, 243, 243);">
            <img src="imagenes/red.png" alt="">
        </div>
    
    <main>
     
    </main>
  </body>
  <?= $menu->footer(); ?>
</html>
<?php
    }else{
        header('Location: index.php');
    }        
?>