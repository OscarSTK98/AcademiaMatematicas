<!DOCTYPE html>

<html>
    <head>
        <title>Material Disponible</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css">
    </head>


    <script>
            function Afirma(id){
         
                if(confirm("Este archivo es restringido, ten a la mano la clave del profesor")){
               var Sel = document.getElementById('ID');

               Sel.value = id;

               document.getElementById("f1").submit();

        }

}
              
                
            
        </script>
    <body background="fond.jpg">

        <br />
        <br />
   
        <center>
        
            <h3>Descarga de material</h3>
            <br />
  
            <input class="form-control" style="width: 300px;" id="myInput" type="text" placeholder="Nombre Archivo, Profesor, Grupo, etc..">
        </center>
        
        <br>
        
        <center>
  
            <table class="table table-responsive table-bordered table-striped ">
   
                <thead>
                    <tr>
                        <th><center>Nombre</center></th>
                        <th><center>Asignatura</center></th>
                        <th><center>Grupo</center></th>
                        <th><center>Profesor</center></th>
                        <th><center>Acceso</center></th>
                        <th><center>Descargar</center></th>
                    </tr>
                </thead>
    
                <tbody id="myTable" style="width: 50%;">
    
                <?php
         
                    $Usuario = "u741688727_root";
                    $Password = "123456789";
                    $Servidor = "localhost";
                    $BaseDatos = "u741688727_academia";

                    $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
                    $ConsultaPass= "SELECT * FROM Archivos";
                    $Query = mysqli_query($Conexion, $ConsultaPass);

                    
            
                    if(!$Query){

                        echo "No existe el archivo";  

                    }else{
             
                        echo "<form action='Valida.php' method='post' name='f1' id='f1'>";
                        echo "<input type='text' value='' id='ID' name='ID' hidden />";
                        while($columna = mysqli_fetch_array($Query)){

                            $Resultado = $columna['idArchivo'];
                            $NomArchivo = $columna['Nombre'];
                            echo '<tr>';
                            echo '<td><center>';
                            echo $columna['Nombre'];
                            echo '</td></center>';
                            echo '<td><center>';
                            echo $columna['Asignatura'];
                            echo '</td></center>';
                            echo '<td><center>';
                            echo $columna['Grupo'];
                            echo '</td></center>';
                            echo '<td><center>';
                            echo $columna['Profesor'];
                            echo '</td></center>';

                            if($columna['Acceso']=="1"){

                                echo '<td><center>';
                                echo "Restringido";
                                echo '</td></center>';
                                echo '<td><center>';
                                echo "<input type='button' onclick='Afirma($Resultado)' class='btn btn-primary' value='Descargar Archivo'></a>";
                                echo '</td></center>';
                                echo '</tr>';

                            }else{

                                echo '<td><center>';
                                echo "Libre";
                                echo '</td></center>';
                                echo '<td><center>';
                                echo "<a href='Archivos/$NomArchivo' download='$NomArchivo'><input type='button' class='btn btn-primary' value='Descargar Archivo'></a>";
                                echo '</td></center>'; 
                                echo '</tr>';
                            }    
                        }

                        echo "</form>";
                    }
                ?>   
                </tbody>
            </table>
        </center>
        
        <center>
   <a href="/"><button type="submit"  style="width: 200px;" class="btn btn-danger">Regresar</button></a>
  </center>
  
  <br />
  <br />

        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
        </script>
  
    </body>
</html>