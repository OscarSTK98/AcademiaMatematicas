<?php

    session_start();

    if($_SESSION["Pass"] == "0000"){
    
        $Profesor = $_SESSION["Nombre"]." ".$_SESSION["Apellido"];
        $id = $_SESSION["idProfesor"];
    
        echo "<!DOCTYPE html>

              <html>
                <head>
                    <meta charset='UTF-8'>
                    <title>Subir Archivos</title>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                    <link rel='stylesheet' href='Style.css'>
                </head>
                
                <script type='text/javascript'>
function mostrarPassword(){
		var cambio = document.getElementById('Password');
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
                    <strong>Información: </strong> Sube material didáctico para facilitar la comunicación entre los alumnos.
                </div>
        
                <form class='form-horizontal' action='Carga.php' method='post' enctype='multipart/form-data'>
   
                <br />      

                <div class='form-group'>
    
                    <label>Asignatura:</label>
                
                    <br/>
                
                    <select name='Asignatura' style='width: 70%;' >
                        <option value='Algebra'>Álgebra</option>
                        <option value='Geometria y Trigonometria'>Geometría y Trigonometría</option>
                        <option value='Geometria Analítica'>Geometría Analítica</option>
                        <option value='Calculo Diferencial'>Cálculo Diferencial</option>
                        <option value='Calculo Integral'>Cálculo Integral</option>
                        <option value='Probabilidad y Estadística'>Probabilidad y Estadística</option>
                    </select>
                    
                </div>
            
                <div class='form-group'>
                
                    <input type='text' value='$id' name='idP' hidden>
                    <label>Grupo:</label>
                    <div>
                        <input type='text' style='width: 70%;' class='form-control' id='Grupo' required name='Grupo' placeholder='Ejemplo: 2IM7'>
                    </div>
                </div>
            
                <div class='form-group'>
                    <label>Profesor:</label>
                    <div> 
                        <input type='text' style='width: 70%;' class='form-control' id='Profesor' required name='Profesor' value='$Profesor'>
                    </div>
  
                </div>
            
                <div class='form-group'>
                    <label>Contraseña:</label>
                    <div> 
                        <input type='password' style='width: 70%;' class='form-control' id='Password' required name='Password'>
                    </div>   
                    <br >
                    <div class='input-group-append'> 
                    <button id='show_password' class='btn btn-primary' type='button' onclick='mostrarPassword()'> Mostrar Clave </button>
                </div>
                    
                </div>
            
                <div class='alert alert-danger' style='width: 70%; '>                    
                    La <strong>contraseña</strong> sirve para poder identificar el archivo, poder eliminarlo o restringir su acceso. 
                    <br >
                    <p><strong>Puedes poner una contraseña única para todos los archivos o poner distintas para cada archivo o grupo, como desees</strong></p>
                    <br >
                    <p>Todas las contraseñas podras verlas en la sección de 'Mi Material' en tu perfil</p>
                </div>
  
                <div class='form-group'>
                    <label>Archivo:</label>
                    <div> 
                        <input type='file' style='width: 70%;' class='form-control' id='Archivo' name='Archivo'>
                    </div>
                </div>
            
                <div class='form-group'>
                    <label>Acceso Restringido:</label>
                    <div> 
                        <select name='Acceso' style='width: 70%;'>
                            <option value='1'>Si</option>
                            <option value='0'>No</option>
                        </select> 
                    </div>  
                </div>
            
                <div class='alert alert-warning' style='width: 70%;'>
                    Al activar el <strong>acceso restringido</strong> se solicitara a los alumnos la contraseña ingresada para poder descargar.
                </div>
            
                <div class='form-group'>     
                    <div>
                        <button style='width: 50%; ' type='submit' class='btn btn-success'>Subir Archivo</button>
                    </div>
                </div>    
            </form>   
        </center>
        
        <br />
        <br />
        
        </body>
    </html>";
     
    }else{

        echo 'Holi';
    }
