<?php


            $id = $_POST['id'];

            $Usuario = "u741688727_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "u741688727_academia";
            
            /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/

            $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
            $ConsultaPass= "SELECT * FROM Avisos WHERE idAviso=$id";
            $Query = mysqli_query($Conexion, $ConsultaPass);
            
            $columna = mysqli_fetch_array($Query);
                    
                    $Titulo = $columna['Titulo'];
            
           $Contenido = $columna['Contenido'];
           $Prof = $columna['Profesor'];
           
           echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>Aviso</title>
        
        <meta name='viewport' initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='Style.css'>

    </head>
    <body>
       
        
      
        <div id='Preguntas' >
            <center>
            <div id='Contenido'>
    
                <div id='Top' style='position: relative; left: 0px; top:-20px; '>
     
                    <center>
                    <h3 style='color: white;position: relative; left: 0px; top:30px;'>$Titulo</h3>
                    </center>                    
                </div>
                <center>
                <textarea cols='50' rows='10' style='position: relative; top: 50px; border: none; text-align: center; width:20%;' readonly>$Contenido
                
                </textarea>
                </center>
                <br>
                <br>
                <br>
                
                <p>Atte: $Prof</p>
                
                
                <br />
                <br />

                
            </div>
        </div

    </body>
</html>
";


?>