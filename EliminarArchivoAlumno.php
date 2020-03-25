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

            $NombreArchivo= "SELECT * FROM Alumno WHERE idAlumno=$idArchiv";
            $Query = mysqli_query($Conexion, $NombreArchivo);
            $columna = mysqli_fetch_array($Query);
            $Nombre = $columna['Archivo'];
            
            
            $AltaArchivo= "DELETE FROM Alumno WHERE idAlumno=$idArchiv";
            $Query2 = mysqli_query($Conexion, $AltaArchivo);
            
            unlink("Archivos/Alumnos/$Nombre");
        
            
          
        
?>

     <script>
         alert('Archivo Eliminado');
        
         location.href="https://matematicascecyt3tm.com/Alumnos.php";
        </script>