<?php
    class MySQL{
        
        //Data Of Connection
        private $ipServer ="localhost";
        private $user ='id19460180_root';
        private $password = 'x]6\NDl]gEfLGGOT';
        private $database = 'id19460180_medilaser';

        private $connection;
        private $result;

        //constructor
        public function __construct(){
            
            $this->connection = new mysqli($this->ipServer, $this->user, $this->password, $this->database);
            
            if(mysqli_connect_errno()){
                echo "Fail Connection To The Data Base: ".  mysqli_connect_error();
                exit();
            }
            else{
                $this->connection->query("SET lc_time_names = 'es_ES'");
                $this->connection->query("SET NAMES 'utf8'");
            }
            
        }
        
        public function disconnect(){
            mysqli_close($this->connection);
        }

        public function numberRows(){
            return $this->result->num_rows;
        }

        public function query($query){
            $this->result = $this->connection->query($query) or die("Error En La Consulta...");
            return $this->result; 
        }

        public function insert($query){
            $this->connection->query($query);
            return mysqli_insert_id($this->connection);
        }
        
        public function lastID(){
            return $this->connection->insert_id;
        }
    }
?>