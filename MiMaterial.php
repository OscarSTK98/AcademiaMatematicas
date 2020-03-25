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
    <body>
        
        <br />
        <br />
    <center>
        
        <h3>Administración de Archivos Subidos</h3>
    
        <br>
  
        <input class="form-control"  style="width: 300px;" id="myInput" type="text" placeholder="Buscar Archivo..">
        </center>
  <br>
     <center>
  <table class="table table-bordered table-striped">
   
    <thead>
      <tr>
          
          <th><center>Nombre</center></th>
  <th><center>Asignatura</center></th>
  <th><center>Grupo</center></th>
  <th><center>Acceso</center></th>
  <th><center>Contraseña</center></th>
  <th><center>Opciones</center></th>
      
      </tr>
    </thead>
    
    <tbody id="myTable">
    
    <script>
            function Afirma(id){
         
                if(confirm("¿Estas seguro de eliminar este archivo?")){
               var Sel = document.getElementById('ID');

               Sel.value = id;

               document.getElementById("f1").submit();

        }

}
              
                
            
        </script>
        
     <?php
         
           $Usuario = "u741688727_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "u741688727_academia";
            
            /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/
            session_start();
            $id = $_SESSION["idProfesor"];

            $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
            $ConsultaPass= "SELECT * FROM Archivos WHERE idP=$id";
            $Query = mysqli_query($Conexion, $ConsultaPass);
            
            if(!$Query){
    
                echo "No existe el archivo";  
   
            }else{

                echo "<form action='Eliminar.php' method='post' name='f1' id='f1'>";
                echo "<input type='text' value='' id='ID' name='ID' hidden />";
               
                while($columna = mysqli_fetch_array($Query)){
                  
                    $Resultado = $columna['Nombre'];
                    $idAr = $columna['idArchivo'];
                    
                    
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
                   
                   if($columna['Acceso'] == '1'){
                       
                       echo 'Restringido';
                   }else{
                       
                       echo 'Libre';
                   }
                   
                   echo '</td></center>';
                   
                   echo '<td><center>';
                   echo $columna['Contraseña'];
                   echo '</td></center>';
                   
                   echo '<td><center>';
                   echo "<input type='button' onclick='Afirma($idAr)' class='btn btn-danger' value='Eliminar Archivo'>";
                   echo '</td></center>';
                   
             
              
                }
                echo "</form>";
              
            }

        ?>
  
    </tbody>
      
  </table>
</center>
         
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
