<?php
require_once 'mysql.php';

class usuarios{

    private $mysql;
    private $user;
    private $password;

    //nstructor
    public function __construct($user = '', $password = ''){
        
        $this->mysql = new MySQL();
        $this->user = $user;
        $this->password = $password;     
    }
    public function consultarusuario(){
        
        $consulta = $this->mysql->query("SELECT usuario.*, CONCAT(usuario.nombre, ' ', usuario.apellido) as Usuarionombre FROM usuario WHERE usuario.correo = '".$this->user."'");
        
        return mysqli_fetch_assoc($consulta);
    }
}

?>