<?php
require_once 'mysql.php';

class insumos{

    //nstructor
    public function __construct(){
        
        $this->mysql = new MySQL(); 
    }
    public function consultarinsumo($insumo){ //funciona

        $consulta = $this->mysql->query("SELECT 
            insumos.*, 
            insumos.nombre as insumos,
            usuario.nombre as Usuarios
            FROM `insumos`
            JOIN usuario ON usuario.id = insumos.idusur
            WHERE insumos.id = '".$insumo."'");
        
        return mysqli_fetch_assoc($consulta);
    }
    public function modificarinsumo($user){
        //si
        $this->mysql->query("UPDATE `insumos` SET `nombre`='".$_POST['nombre']."' WHERE insumos.id = '".$_POST['insumo']."'");   //Funciona     
        
    }

    public function eliminarinsumo(){
        $this->mysql->query("DELETE FROM `insumos` WHERE insumos.id = '".$_POST['id']."'");     //Funciona  
        
    }
    public function crearinsumo($user){
        echo "string";
        $this->mysql->query("INSERT INTO `insumos`(`nombre`, `idusur`) VALUES ('".$_POST['nombre']."','".$user."')");        
        
    }
}

?>