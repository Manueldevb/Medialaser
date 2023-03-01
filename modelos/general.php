<?php
require_once 'mysql.php';

class general{

    //nstructor
    public function __construct(){
        
        $this->mysql = new MySQL();   
    }
    public function listunidades(){
        
        $consulta = $this->mysql->query("SELECT * FROM undhospitalaria");

        $data = [];
        
        while($row = mysqli_fetch_assoc($consulta)){
            array_push($data, $row);
        }

        return $data;
    }
    public function listadepacientes(){
        
        $consulta = $this->mysql->query("SELECT 
            pacientes.*, 
            usuario.nombre as Usuario, 
            undhospitalaria.nombre as Unidad 
            FROM `pacientes`
            JOIN usuario ON usuario.id = pacientes.idusur
            JOIN undhospitalaria ON undhospitalaria.id = pacientes.idund 
            ORDER BY usuario.id DESC LIMIT 10");

        $data = [];
        
        while($row = mysqli_fetch_assoc($consulta)){
            array_push($data, $row);
        }

        return $data;
    }
    public function listinsumos(){
        
        $consulta = $this->mysql->query("SELECT * FROM insumos");

        $data = [];
        
        while($row = mysqli_fetch_assoc($consulta)){
            array_push($data, $row);
        }

        return $data;
    }
    public function listamedicacion(){
        
        $consulta = $this->mysql->query("SELECT 
            medicacion.*, 
            insumos.nombre as insumos,
            pacientes.ci as Cedula,
            pacientes.nombre as Paciente,
            usuario.nombre as Usuarios
            FROM `medicacion`
            JOIN pacientes ON pacientes.id = medicacion.idpac
            JOIN insumos ON insumos.id = medicacion.idins
            JOIN usuario ON usuario.id = medicacion.idusur        
            ORDER BY usuario.id DESC LIMIT 10");

        $data = [];
        
        while($row = mysqli_fetch_assoc($consulta)){
            array_push($data, $row);
        }

        return $data;
    }
    public function listinsumo(){
        
        $consulta = $this->mysql->query("SELECT * FROM insumos");

        $data = [];
        
        while($row = mysqli_fetch_assoc($consulta)){
            array_push($data, $row);
        }

        return $data;
    }
    public function lista(){
       
        $consulta = $this->mysql->query("SELECT 
            insumos.*, 
            insumos.nombre as insumos,
            usuario.nombre as Usuarios
            FROM `insumos`
            JOIN usuario ON usuario.id = insumos.idusur        
            ORDER BY usuario.id DESC LIMIT 10");

        $data = [];
        
        while($row = mysqli_fetch_assoc($consulta)){
            array_push($data, $row);
        }

        return $data;
    }
}

?>