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

    $Nombre1 = $_POST['Nombre'];
    $Apellidos1 = $_POST['Apellidos'];
    $Username1 = $_POST['Username'];
    $Contraseña1 = $_POST['Contraseña'];
    
    $id = $_POST['idP'];
    
    $Actualizar = "UPDATE Profesor SET Nombres='$Nombre1', Apellidos='$Apellidos1', Username='$Username1', Contraseña='$Contraseña1' WHERE idProfesor='$id'";
    $Query = mysqli_query($Conexion, $Actualizar);
    
    ?>

<script>
         alert('Datos Actualizados');
      
         location.href="https://matematicascecyt3tm.com/Cuenta.php";
        </script>
