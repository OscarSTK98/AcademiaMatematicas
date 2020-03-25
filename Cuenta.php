<?php

session_start();

if($_SESSION["Pass"] == "0000"){
    
    $id = $_SESSION["idProfesor"];
    
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
    
    $ConsultaPass= "SELECT * FROM Profesor WHERE idProfesor=$id";
    $Query = mysqli_query($Conexion, $ConsultaPass);
    
    $columna = mysqli_fetch_array($Query);
    $_SESSION["idProf"] = $id;
    
    $Nombres = $columna["Nombres"];
    $Apellidos = $columna["Apellidos"];
    $Username = $columna["Username"];
    $Contraseña = $columna["Contraseña"];
    
    echo "<!DOCTYPE html>

<html>
    <head>
         <meta charset='UTF-8'>
        <title>Mi Cuenta</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='Style.css'>
    </head>
    
    <script type='text/javascript'>
function mostrarPassword(){
		var cambio = document.getElementById('Contraseña');
		if(cambio.type == 'password'){
			cambio.type = 'text';
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = 'password';
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
    <body>
        
        <br />
        <br />
    <center>
        
        <div class='alert alert-info'>
  
            <strong> Modifica los datos de tu cuenta.</strong>

        </div>
        
        <form class='form-horizontal' action='Update.php' method='post'>
  
            <br />
            <br />

            <div class='form-group'>
                <label>Nombre(s):</label>
                <div>
                <input type='text' value='$id' hidden name='idP' />
                    <input type='text' class='form-control' style='width: 300px;' id='Nombre' name='Nombre' value='$Nombres'>
    
                </div>
  
            </div>
  
            <div class='form-group'>
    
                <label>Apellidos:</label>
    
                <div> 
      
                    <input type='text' style='width: 300px;' class='form-control' id='Apellidos' name='Apellidos' value='$Apellidos'>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label>Username:</label>
    
                <div> 
      
                    <input type='text' style='width: 300px;' class='form-control' id='Username' name='Username' value='$Username'>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label>Contraseña:</label>
                <input type='password' style='width: 300px;' class='form-control' id='Contraseña' name='Contraseña' value='$Contraseña'>
        <br />
                <div class='input-group-append'> 
                    <button id='show_password' class='btn btn-primary' type='button' onclick='mostrarPassword()'> Mostrar Clave </button>
                </div>
   
          </div>
                
            <br />
            
            <div class='form-group'> 
    
                <div>
      
                    <button style='width: 300px;' type='submit' class='btn btn-success'>Actualizar Datos</button>
    
                </div>
  
            </div>
            
         
        </form>   
    </center>
 
    </body>
</html>

";
    
    
}else{
    
    echo 'Holi';
}


?>