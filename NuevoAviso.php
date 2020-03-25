<!DOCTYPE html>

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
                <body>
                
                <br />
                <br />
        
                <center>

        
                <div class='alert alert-info'>
                    <strong>Información: </strong> Publica un aviso para los alumnos.
                </div>
        
                <form class='form-horizontal' action='SubirAviso.php' method='post'>
   
                <br />     
                
                <div class='form-group'>
                    
                    <label>Titulo:</label>
                    
                    <br />
                    
                    <input type='text' style='width: 50%;' class='form-control' name="Tit">
                 
                </div>

                <div class='form-group'>
    
                    <label>Contenido del Aviso:</label>
                
                    <br/>
                
                    <textarea rows="11" style="width: 50%;" cols="40" name="Aviso"></textarea>
                    
                </div>
            
                
                <div class='form-group'>     
                    <div>
                        <button style='width: 50%; ' type='submit' class='btn btn-success'>Subir Aviso</button>
                    </div>
                </div>    
            </form>   
        </center>
 
        
        </body>
    </html>