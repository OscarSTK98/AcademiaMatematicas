<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceso Restringido</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        
      
       <br />

        <br />
        <div class="alert alert-danger">
            <center>
            <strong>Atención</strong> El contenido que intenta descargar tiene <strong>acceso restringido</strong>, para acceder a el ingresa la contraseña proporcionada por el profesor
            </center>  
        </div>
        <br />
<br />

<?php

    
    $idArchiv = $_POST['ID'];
    echo "
    <br />
    <center>
         <form action='Access.php' method='post' enctype=multipart/form-data>
                   <div class='form-group'>
                   <input type='text' value=$idArchiv id='ID' name='ID' hidden />
                        <label>Contraseña del archivo:</label>
                        <input type='text' class='form-control' name='Contraseña' required style='width: 400px' id='Contraseña'>

                   </div>

                   <button type='submit' class='btn btn-success'>Enviar</button>

               </form> 
               <br >
                <a href='/Material.php'><button type='button' class='btn btn-danger'>Regresar</button></a>
    </center>
    </body>
</html>";

?>