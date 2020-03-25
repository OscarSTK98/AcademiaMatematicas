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
            $Asignatura = $_POST['Asignatura'];
            $Nombre = $_POST['Nombre'];
            
            if($Contraseña == "ACE2020" || $Contraseña == "Aprobgeo" || $Contraseña == "CrissPrieto" || $Contraseña == "profmavacecyt3" || $Contraseña == "caltri2"){
                
                if(strpos($Archivo, '#') == false){
                   
                    $AltaArchivo= "INSERT INTO Alumno (Archivo, Materia, Grupo, Nombre, Contraseña) values ('$Archivo', '$Asignatura', '$Grupo', '$Nombre', '$Contraseña')";
                 
                $Query2 = mysqli_query($Conexion, $AltaArchivo);
                move_uploaded_file ($_FILES['Archivo']['tmp_name'], './Archivos/Alumnos/'.$_FILES['Archivo']['name']);
                
                echo "  <script>
                        alert('Carga Realizada. Se ha enviado a tu profesor');
                        location.href='https://matematicascecyt3tm.com';
                        </script>"; 
                    
                    
                } else{
                    
                    echo "  <script>
                        alert('El nombre de tu archivo tiene el caracter (#) que es invalido.');
                        location.href='https://matematicascecyt3tm.com';
                        </script>"; 
                    
                }
                
                
            } else {
                
                echo " <script>
                        alert('Tu contraseña es incorrecta. Ponte en contacto con tu profesor');
                        location.href='https://matematicascecyt3tm.com';
                        </script>";
            }
                  
                
        }  
?>
