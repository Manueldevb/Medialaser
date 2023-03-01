<?php
require_once 'mysql.php';

class medicacion{

    //nstructor
    public function __construct(){
        
        $this->mysql = new MySQL(); 
    }
    public function consultarmedicacion($cedula){ //funciona
        
        $consulta = $this->mysql->query("SELECT 
            medicacion.*, 
            insumos.nombre as insumos,
            pacientes.ci as Cedula,
            pacientes.id as Paciente_id,
            pacientes.nombre as Paciente,
            usuario.nombre as Usuarios
            FROM `medicacion`
            JOIN pacientes ON pacientes.id = medicacion.idpac
            JOIN insumos ON insumos.id = medicacion.idins
            JOIN usuario ON usuario.id = medicacion.idusur
            WHERE pacientes.ci = '".$cedula."'");
        
        return mysqli_fetch_assoc($consulta);
    }

    public function consultarpaci($cedula){ //funciona
        
        $consulta = $this->mysql->query("SELECT medicacion.*, pacientes.ci as Cedula, pacientes.id as Paciente_id, pacientes.nombre as Paciente 
            FROM `pacientes` 
            LEFT JOIN medicacion ON medicacion.idpac = pacientes.id 
            WHERE pacientes.ci = '".$cedula."'");
        
        return mysqli_fetch_assoc($consulta);
    }
    public function modificarmed($user){
        //si
        $this->mysql->query("UPDATE `medicacion` SET `idins`='".$_POST['insumo']."',`fechamed`='".$_POST['Fecha']."',`descripcion`='".$_POST['descripcion']."',`idusur`='".$user."' WHERE medicacion.id = '".$_POST['id']."'");   //Funciona     
        
    }

    public function eliminarmed(){
   
        $this->mysql->query("DELETE FROM `medicacion` WHERE medicacion.id = '".$_POST['id']."'");     //Funciona  
        
    }
    public function crearmed($user){

        $this->mysql->query("INSERT INTO `medicacion`(`idpac`, `idins`, `fechamed`, `descripcion`, `idusur`) VALUES ('".$_POST['pacienteid']."','".$_POST['insumo']."','".$_POST['Fecha']."','".$_POST['descripcion']."','".$user."')");        
        
    }
}

?>




