<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
</head>

<body background="fond.jpg">

    <style>
        body{
            
            background-color: #f3f0f0;
            
        }
        .carousel {
            position: relative;
        }
        .carousel-caption {
            position: absolute;
            background: rgba(0,0,0,0.4);
            padding: 15px 10px;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }
    </style>


    <div class="container">
        <div id="magicCarousel" class="carousel slide my-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target='#magicCarousel' data-slide-to='0' class='active'></li>
                

    <?php 
    
        $Usuario = "u741688727_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "u741688727_academia";

        $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
        $ConsultaPass= "SELECT * FROM Avisos";
        $Query = mysqli_query($Conexion, $ConsultaPass);
        
        $Query3 = mysqli_query($Conexion, $ConsultaPass);
        
        $Check = mysqli_fetch_array($Query3);
        
        $Random = rand(1,5).".jpg";

        if($Check['idAviso']==""){

            echo "</ol>";
            echo "<div class='carousel-inner' role='listbox'>
                    <div class='carousel-item active'>
                        <img src='$Random' class='d-block w-100'>
                        <div class='carousel-caption'>
                            <h3>No hay anuncios</h3>
                            <p>Recuerda estar atento para cualquier anuncio publicado sobre las asignaturas de matemáticas</p>
                        </div> 
                    </div>";
        
        }else{

            $Count = "SELECT COUNT(*) FROM Avisos";
            $Query2 = mysqli_query($Conexion, $Count);
            
            $Ran = rand(1,5).".jpg";

            $columna2 = mysqli_fetch_array($Query2);

            $i = $columna2['COUNT(*)'];

            for($j = 1; $j <= $i; $j++){

                echo "<li data-target='#magicCarousel' data-slide-to='$j'></li>";

            }

            echo "</ol>";
            echo "<div class='carousel-inner' role='listbox'>";
            
            echo "<div class='carousel-item active'>
                        <img src='$Ran' class='d-block w-100'>
                      <div class='carousel-caption'>
                        <h3>Avisos</h3>
                        <p>Hay avisos que deberias revisar</p>
                      </div> 
                    </div>";

            while($columna = mysqli_fetch_array($Query)){

                $R = rand(1,5).".jpg";
                $Contenido = $columna['Contenido'];
                $T = $columna['Titulo'];

                echo "<div class='carousel-item'>
                        <img src='$R' class='d-block w-100'>
                      <div class='carousel-caption'>
                        <h3>$T</h3>
                        <p>$Contenido</p>
                      </div> 
                    </div>";

            }
        }
    
    ?>
        
        <a href="#magicCarousel" class="carousel-control-prev" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#magicCarousel" class="carousel-control-next" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">Next</span>
        </a>
        
      </div>
    </div>
  </div>

  <center>
   <a href="/"><button type="submit"  style="width: 200px;" class="btn btn-danger">Regresar</button></a>
  </center>
  
  <br />
  <br />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
</body>
</html>