<?php

class menu{

    private $usuario;
    private $titulo;

    //nstructor
    public function __construct($user = '', $titulo){
        
        $this->usuario = $user;
        $this->titulo = $titulo;     
    }
    public function navbar(){
        $menu = 
        '<!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>MedilaserSoft || '.$this->titulo.'</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

                <link rel="stylesheet" href="css/style.css" />
            </head>
            <body>
                <header class="header">
                    <nav class="nav">
                        <!-- <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 py-4 bg-white"> -->
                        <a href="home.php" class="logo nav-link" >MedilaserSoft</a>
                        <button class="nav-toggle" aria-label="Abrir menú">
                        <i class="fas fa-bars"></i>
                        </button>
                        <ul class="nav-menu">
                        <li class="nav-menu-item">
                        <a href="pacientes.php" class="nav-menu-link nav-link">Pacientes</a>
                        </li>
                        <li class="nav-menu-item">
                        <a href="medicacion.php" class="nav-menu-link nav-link">Medicacion</a>
                        </li>
                        <li class="nav-menu-item">
                        <a href="Insumos.php" class="nav-menu-link nav-link">Insumos</a>
                        </li>
                        <li class="nav-menu-item">
                        <a href="index.php" class="nav-menu-link nav-link">Cerrar Sesion</a>
                        </li>
                        </ul>
                        <!-- <div class="container">
                          <div class="row">
                            <div class="col">
                              <a href="home.php" class="logo nav-link" >MedilaserSoft</a>
                        <button class="nav-toggle" aria-label="Abrir menú">
                        <i class="fas fa-bars"></i>
                        </button>
                            </div>
                            <div class="col">
                              Column
                            </div>
                            <div class="col">
                              Column
                            </div>
                          </div>
                        </div> -->
                    <!--<h5 style="margin: auto;color: #fff;">Hola, '.$this->usuario.'</h5> -->
                    </div>
                </nav>
                </header>';
        return $menu;
    }
    public function footer (){
        $base='
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>';
        return $base;
    }
}

?>