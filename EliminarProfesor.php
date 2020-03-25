<?php

           $Usuario = "u741688727_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "u741688727_academia";
            
            /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/
 
            //Conexión
            $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
            
            
            $idArchiv = $_POST['ID'];

            $AltaArchivo= "DELETE FROM Profesor WHERE idProfesor=$idArchiv";
            $Query2 = mysqli_query($Conexion, $AltaArchivo);
 
        
?>

     <script>
         alert('Profesor Eliminado');
      
         location.href="https://matematicascecyt3tm.com/Profesores.php";
        </script>