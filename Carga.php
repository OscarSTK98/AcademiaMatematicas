<?php

if ($_FILES['Archivo']["error"] > 0){

            echo "Error: " . $_FILES['Archivo']['error'] . "<br>";
            
        }else{

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
            
            $Archivo = $_FILES['Archivo']['name'];
            $Contraseña = $_POST['Password'];
            $Grupo = $_POST['Grupo'];
            $Profesor = $_POST['Profesor'];
            $Acceso = $_POST['Acceso'];
            $Asignatura = $_POST['Asignatura'];
            $idP = $_POST['idP'];
        
                  
                 $AltaArchivo= "INSERT INTO Archivos (Nombre, Contraseña, Asignatura, Acceso, Grupo, Profesor, idP) values ('$Archivo', '$Contraseña', '$Asignatura', '$Acceso', '$Grupo', '$Profesor','$idP')";
                $Query2 = mysqli_query($Conexion, $AltaArchivo);
                move_uploaded_file ($_FILES['Archivo']['tmp_name'], './Archivos/'.$_FILES['Archivo']['name']);  

        }  

        
?>

     <script>
         alert('Carga Realizada');
         location.href="https://matematicascecyt3tm.com/Subir.php";
        </script>