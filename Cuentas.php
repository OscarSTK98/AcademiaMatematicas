<?php

    $Pass = $_POST['pwd'];
    $Us = $_POST['user'];

    $Usuario = "u741688727_root";
    $Password = "123456789";
    $Servidor = "localhost";
    $BaseDatos = "u741688727_academia";

    $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
    $ConsultaPass= "SELECT * FROM Profesor WHERE Username='$Us' AND Contraseña='$Pass'";    

    $Query = mysqli_query($Conexion, $ConsultaPass);

    if(!$Query){
    
        echo "Usuario No Encontrado";  
   
    }else{
     
        $columna = mysqli_fetch_array($Query);
        $Resultado = $columna['Tipo']; 
        $Nombre = $columna['Nombres'];
        $Apellido = $columna['Apellidos'];
        $idProfesor = $columna['idProfesor'];
     
        /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/
     
        session_start();
     
        $_SESSION["Pass"] = "0000";
     
        if($Resultado === "1"){

            session_start();
     
            $_SESSION["Nombre"] = $Nombre;
            $_SESSION["Apellido"] = $Apellido;
            $_SESSION["idProfesor"] = $idProfesor;
         
            echo "
                <!DOCTYPE html>
                <html>
                <head>
                    <meta charset='UTF-8'>
                    <title>Sistema de Administración</title>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
                    <link rel='stylesheet' href='CSS/Style.css'>  
                </head>
    
                <body background='fond.jpg'>

                    <nav class='navbar navbar-expand-md' style='background-color: #88313d' >

                        <a class='navbar-brand' href='BienvenidaPresidente.php' target='Frame' style='color: white;'><img src='Images/CECYT3.png' alt='Logo' style='width:40px;'> Bienvenid@ $Nombre (Presidente)</a>

                        <button class='navbar-toggler btn btn-default btn-sm' type='button' data-toggle='collapse' data-target='#collapsibleNavbar' style='background-color: white;'>
                            <span class='glyphicon glyphicon-th'></span>
                        </button>

                        <div class='collapse navbar-collapse' id='collapsibleNavbar'>
                            <ul class='navbar-nav'>
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle btn btn-outline-danger' id='navbardrop' data-toggle='dropdown' style='color: white; border: 0;'>Archivos</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='Subir.php' target='Frame'>Nuevo Archivo</a>
                                        <a class='dropdown-item' href='AllMaterial.php' target='Frame'>Todo el material</a>
                                    </div>
                                </li>
                                
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle btn btn-outline-danger' id='navbardrop' data-toggle='dropdown' style='color: white; border: 0;'>Profesores</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='Profesores.php' target='Frame'>Profesores de la Academia</a>
                                        <a class='dropdown-item' href='Reset.php' target='Frame'>Resetear claves</a>
                                    </div>
                                </li>
                                
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle btn btn-outline-danger' id='navbardrop' data-toggle='dropdown' style='color: white; border: 0;'>Avisos</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='NuevoAviso.php' target='Frame'>Nuevo Aviso</a>
                                        <a class='dropdown-item' href='AllAviso.php' target='Frame'>Todos los avisos</a>
                                    </div>
                                </li>
                                
                                 <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle btn btn-outline-danger' id='navbardrop' data-toggle='dropdown' style='color: white; border: 0;'>Alumnos</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='Alumnos.php' target='Frame'>Entregas de Alumnos</a>
                                     
                                    </div>
                                </li>
                               
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle btn btn-outline-danger' id='navbardrop' data-toggle='dropdown' style='color: white; border: 0;'>Cuenta</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='Cuenta.php' target='Frame'>Mi Cuenta</a>
                                        
                                        <a class='dropdown-item' href='https://matematicascecyt3tm.com/'>Cerrar Sesión</a>
                                    </div>
                                </li>
                                
                                
                            </ul>
                        </div>     
                    </nav> 
        
                    <iframe height='875px' width='100%' src='BienvenidaPresidente.php' name='Frame' style='border:none;'></iframe>
                </body>
                </html>"; //Pagina Presidente
            
        }else if($Resultado === "2"){
            
            session_start();
         
            $_SESSION["Nombre"] =$Nombre;
            $_SESSION["Apellido"] = $Apellido;
            $_SESSION["idProfesor"] = $idProfesor;
       
            echo "<!DOCTYPE html>
                <html>
                <head>
                    <meta charset='UTF-8'>
                    <title>Sistema de Administración</title>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
                    <link rel='stylesheet' href='CSS/Style.css'>  
                </head>
    
                <body background='fond.jpg' style='background-size: 300%;'>

                    <nav class='navbar navbar-expand-md' style='background-color: #88313d' >

                        <a class='navbar-brand' href='BienvenidaProfesor.php' target='Frame' style='color: white;'><img src='Images/CECYT3.png' alt='Logo' style='width:40px;'> Bienvenid@ $Nombre (Profesor)</a>

                        <button class='navbar-toggler btn btn-default btn-sm' type='button' data-toggle='collapse' data-target='#collapsibleNavbar' style='background-color: white;'>
                            <span class='glyphicon glyphicon-th'></span>
                        </button>

                        <div class='collapse navbar-collapse' id='collapsibleNavbar'>
                            <ul class='navbar-nav'>
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle btn btn-outline-danger' id='navbardrop' data-toggle='dropdown' style='color: white; border: 0;'>Archivos</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='Subir.php' target='Frame'>Nuevo Archivo</a>
                                        <a class='dropdown-item' href='MiMaterial.php' target='Frame'>Mi Material</a>
                                    </div>
                                </li>
                                
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle btn btn-outline-danger' id='navbardrop' data-toggle='dropdown' style='color: white; border: 0;'>Alumnos</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='Alumnos.php' target='Frame'>Entregas de Alumnos</a>
                                     
                                    </div>
                                </li>
                                
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle btn btn-outline-danger' id='navbardrop' data-toggle='dropdown' style='color: white; border: 0;'>Cuenta</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='Cuenta.php' target='Frame'>Mi Cuenta</a>
                                        <a class='dropdown-item' href='https://matematicascecyt3tm.com/'>Cerrar Sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </div>     
                    </nav> 
        
                    <iframe height='875px' width='100%' src='BienvenidaProfesor.php' name='Frame' style='border:none;'></iframe>
                </body>
                </html>"; //Pagina Profesor
     
        }else{
            
            echo "<script>alert('Usuario o Contraseña Incorrect@');"."location.href='https://matematicascecyt3tm.com/Login.php';</script>";         
        }    
    }