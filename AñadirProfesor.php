<?php

session_start();

if($_SESSION["Pass"] == "0000"){
 
    
    echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>Añadir Profesor</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='Style.css'>
    </head>
    <body>
        
    <center>
        
        <br />
        <br />
       



        
        <div class='alert alert-info'>
  
            <strong>Información: </strong> Añade a la plataforma a los profesores de la academia.

        </div>
        
        <form class='form-horizontal' action='NuevoProfesor.php' method='post' >
  
            <br />

           



            <div class='form-group'>
    
                <label>Nombres:</label>
    
                <div> 
  
                    <input type='text' style='width:300px;' class='form-control' id='Nombres' name='Nombres' required>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label>Apellidos:</label>
    
                <div> 
      
                    <input type='text' style='width:300px;' class='form-control' id='Apellidos' name='Apellidos' required>
    
                </div>
  
            </div>
            
<div class='form-group'>
    
                <label>Username:</label>
    
                <div> 
      
                    <input type='text' style='width:300px;' class='form-control' id='Username' name='Username'required>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label>Contraseña:</label>
    
                <div> 
      
                    <input type='password' style='width:300px;' class='form-control' id='Password' name='Password'required>
    
                </div>
                
            </div>

<br />
            <div class='form-group'> 
    
                <div>
      
                    <button style='width:300px;' type='submit' class='btn btn-success'>Añadir Profesor</button>
    
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