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
            $Conexion = mysqli_connect($Servidor,$Usuario,$Password,$BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");

           $Contenido = $_POST['Aviso'];
           $Ti = $_POST['Tit'];
            
            $AltaArchivo= "INSERT INTO Avisos (Titulo, Contenido) values ('$Ti', '$Contenido')";
            $Query = mysqli_query($Conexion, $AltaArchivo);
            
        


?>

     <script>
         alert('Carga Realizada');
         
         location.href="https://matematicascecyt3tm.com/NuevoAviso.php";
        </script>