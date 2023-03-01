<?php
require_once 'mysql.php';

class pacientes{

    //nstructor
    public function __construct(){
        
        $this->mysql = new MySQL(); 
    }
    public function consultarpaciente($cedula){
        
        $consulta = $this->mysql->query("SELECT 
            pacientes.*, 
            usuario.nombre as Usuario, 
            undhospitalaria.nombre as Unidad 
            FROM `pacientes`
            JOIN usuario ON usuario.id = pacientes.idusur
            JOIN undhospitalaria ON undhospitalaria.id = pacientes.idund 
            WHERE pacientes.ci = '".$cedula."'");
        
        return mysqli_fetch_assoc($consulta);
    }
    public function modificarpaciente($user){
        //si
        $this->mysql->query("UPDATE `pacientes` SET `ci`= '".$_POST['cedula']."',`nombre`='".$_POST['Nombre']."',`apellido`='".$_POST['Apellido']."',`idund`='".$_POST['Unidad']."',`fecha`='".$_POST['Fecha']."',`observaciones`='".$_POST['Observaciones']."',`idusur`='".$user."' WHERE pacientes.id = '".$_POST['id']."'");        
        
    }

    public function eliminarpaciente(){
   
        $this->mysql->query("DELETE FROM `pacientes` WHERE pacientes.id = '".$_POST['id']."'");        
        
    }
    public function crearpaciente($user){

        $this->mysql->query("INSERT INTO `pacientes`(`ci`, `nombre`, `apellido`, `idund`, `fecha`, `observaciones`, `idusur`) VALUES ('".$_POST['cedula']."','".$_POST['Nombre']."','".$_POST['Apellido']."','".$_POST['Unidad']."','".$_POST['Fecha']."','".$_POST['Observaciones']."','".$user."')");        
        
    }
}

?>