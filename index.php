<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Matematicas CECyT 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="www/css/general.css">
        <link rel="stylesheet" href="www/css/owlcarousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="www/css/owlcarousel/owl.theme.default.css" />
    </head>
    <body class="bg">
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-center">
                        <img class="logo__big" src="www/images/CECYT3.png">
                    </h3>
                    <strong class="text-center">
                        <img class="logo__mini" src="www/images/CECYT3.png">
                    </strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-education"></i>
                            Alumnos
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="Material.php">Material</a></li>
                            <li><a href="Modulo.html">Módulo para súbir archivos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-apple"></i>
                            Profesores
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="Login.php">Inicio sesión</a></li>
                        </ul>
                    </li>
                    <!--<li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Portfolio
                        </a>
                    </li>-->
                </ul>

                <!--<ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul>-->
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <span id="sidebarCollapse" class="sidebarButton">
                                <i class="glyphicon glyphicon-menu-hamburger"></i>
                            </span>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!--<ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>-->
                        </div>
                    </div>
                </nav>

                <h3 class="text-center">Centro de Estudios Cientificos y Tecnológicos #3 "Estanislao Ramírez Ruíz"</h3>
                <h3 class="text-center">¡Bienvenid@ al sitio oficial de la academía de matemáticas turno matutino!</h3>

                <div class="text-center">
                    <img class="img__main" src="www/images/CECYT3.png">
                </div>

                <h4 class="text-center"><i>"En las matemáticas es donde el espiritu encuentra los elementos que más ansía: la continuidad y la perseverancia"</i></h4>
                <h4 class="text-center fontWeight">Anatole France</h4>

                <br >
                 <div class="alert alert-danger w-20">
                  <strong>Información de contacto para dudas:</strong> academia-matematicas@outlook.com
                </div>
                <br >
                <hr>
                <center><h1>Avisos</h1></center>
                <br >
                <div class="alert alert-warning">
                  <strong>Información COVID-19:</strong> Debido a los acontecimientos, se habilitará un módulo en la página para poder súbir trabajos si es que sus profesores lo requieren.
                  
                  Se anunciará en esta página que profesores requerirán esto
                </div>
                <br>
               
                
                

                <div class="container__carousel">
                    <div class="owl-carousel owl-theme">

                        <?php 
            
                            $Usuario = "u741688727_root";
                            $Password = "123456789";
                            $Servidor = "localhost";
                            $BaseDatos = "u741688727_academia";

                            $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
                            $ConsultaPass= "SELECT * FROM Avisos";
                            $Query = mysqli_query($Conexion, $ConsultaPass);

                            while($columna = mysqli_fetch_array($Query)){

                                $R = "bg".rand(1,7).".jpg";

                    
                                $Contenido = $columna['Contenido'];
                                $T = $columna['Titulo'];

                                echo "<div class='image_container_carousel'>
                                        <img class='img__main' src='www/images/$R' />
                                      
                                        <div class='bottom-right-carousel background-image-carousel' style='background-color:rgba(0,0,0,0.8)'>
                                        <center>
                                        <p style='color:white; font-size:70%'>$T</p>
                                        <p style='color:white; font-size:70%'>$Contenido</p></div>
                                        </div></center>";

                            }
                        ?>
                    </div>
                        </div>

                <div class="line"></div>
                <div class="card-footer text-muted footer__main">
                    <div class="row">
                        <div class="column mr_web" id="footer1">
                            <div class="mb_ fontWeight">
                                Instituto Politécnico Nacional
                            </div>
                            <div class="text_j">
                                Academia de Matemáticas Turno Matutino del Centro de Estudios Científicos y Tecnológicos #3 "Estanislao Ramírez Ruíz"
                            </div>
                        </div>
                        <div class="column" id="footer1">
                            <div class="mb_ mt_app fontWeight">
                                Contacto
                            </div>
                            <div class="text_j">
                                Av. Carlos Hank González s/n, Col, Valle de Ecatepec, 55119 Ecatepec de Morelos, Méx.
                            </div>
                            <div class="text_j">
                                academia-matematicas@outlook.com
                            </div>
                            <!-- <div class="text_j">
                                Página Oficial CECyT 3
                            </div>
                            <div class="text_j">
                                Página Oficial IPN
                            </div> -->
                        </div>
                    </div>    
                    <div class="footer__bottom footer__textAlign">
                        © <span class="currentYear"></span> Copyright: <span class="fontWeight">Sistema creado por alumnos de la Escuela Superior de Cómputo.</span>
                    </div>
                </div>
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <script src="www/css/owlcarousel/owl.carousel.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="www/js/index.js"></script>
    </body>
</html>

