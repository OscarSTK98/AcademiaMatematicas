<!DOCTYPE html>

<html>
    <head>
        <title>Profesores</title>
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
        
        <h3>Profesores de la Academia de Matemáticas</h3>
    
        <br>
  
        <input class="form-control"  style="width: 300px;" id="myInput" type="text" placeholder="Buscar Profesor..">
        </center>
  <br>
     <center>
  <table class="table table-bordered table-striped" style="width: 50%;">
   
    <thead>
      <tr>
          
          <th><center>Nombres</center></th>
  <th><center>Username</center></th>
  <th><center>Opciones</center></th>

      
      </tr>
    </thead>
    
    <tbody id="myTable">
    
    <script>
            function Afirma(id){
         
                if(confirm("¿Estas seguro de eliminar este profesor?")){
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
            $ConsultaPass= "SELECT * FROM Profesor WHERE Tipo=2";
            $Query = mysqli_query($Conexion, $ConsultaPass);
            
            if(!$Query){
    
                echo "No existe el archivo";  
   
            }else{

                echo "<form action='EliminarProfesor.php' method='post' name='f1' id='f1'>";
                echo "<input type='text' value='' id='ID' name='ID' hidden />";
               
                while($columna = mysqli_fetch_array($Query)){
                  
                    $Resultado = $columna['Nombres'];
                    $idAr = $columna['idProfesor'];
                    
                    
                   echo '<tr>';
                   
   
                   
                   echo '<td><center>';
                   echo $columna['Nombres'];
                   echo '</td></center>';
                   
                   echo '<td><center>';
                   echo $columna['Username'];
                   echo '</td></center>';

                   echo '<td><center>';
                   echo "<input type='button' onclick='Afirma($idAr)' class='btn btn-danger' value='Eliminar Profesor'>";
                   echo '</td></center>';
                   
                   echo '</tr>';
             
              
                }
                echo "</form>";

              
            }

        ?>
  
    </tbody>
      
  </table>
</center>
  <center><a href="AñadirProfesor.php"><input type='button' class='btn btn-primary' value='Añadir Profesor'></a></center>
         <br />
         <br />


         
         <div class='alert alert-warning alert-dismissible'>
<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Puede ceder el cargo de presidencia de academia:</strong> para ello, es necesario escribir el username de manera <strong>EXACTA</strong> y dar clic en el boton 'Ceder Presidencia'
</div>
         
         <form action="Ceder.php" method="post" >
         <center><input type='text' style="height: 33px;"name='Name' placeholder="Username del profesor" />
         <input type='submit' class='btn btn-warning' value='Ceder Presidencia'></center>
         </form>
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

        <br />
         <br />
        
    </body>
</html>
