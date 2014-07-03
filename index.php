      <?php
      include ("libMenu.php");
      require_once dirname(__FILE__).'/db_connect.php';
      session_start();
      $login= "";
      $loginResult = "";
      if (isset($_SESSION["loginStatus"])){
        $loginResult = $_SESSION["loginStatus"];
      } elseif (isset($_GET['login'])) {
       $login= $_GET['login'];
     }

     ?>

     <!DOCTYPE html>
     <html lang="es">
     <head>
      <meta charset="utf-8">
      <title></title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.php"><img src="img/logo.png" alt=""></a>
          </div>

          <div class="navbar-collapse collapse">

            <?php if ($loginResult == "true") {
             registrado();

           } else {
            noRegistrado();
          }?>

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" >
           <?php printCategorias(); ?>
         </ul>


       </div>

       <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >

        <?php 
        if ($login == "false") {
         loginErrMess();
         

        }             
            $registros = 6;

            if(isset($_GET["pagina"])){
              $pagina = $_GET["pagina"];
            }else{
              $pagina=0;
            }

            
            
            if ($pagina==0) { 
                  $inicio = 0; 
                  $pagina = 1; 
            } 
            else { 
                  $inicio = ($pagina - 1) * $registros; 
            } 
            

             $db = new DB_CONNECT(); 
             $query=("SELECT * FROM Publicacion ORDER BY idPublicacion DESC LIMIT ".$inicio.",".$registros);            
             $resultados = $db->query($query);

             $query2=("SELECT COUNT(*) AS num FROM Publicacion");

        $data = $db->query($query2); 

        $row=mysqli_fetch_assoc($data);
        $total_registros=$row['num'];

        

        $total_paginas = ceil($total_registros / $registros);             

  if($total_registros) {
  
    while($res=mysqli_fetch_array($resultados)) {
      
      $titulo = $res["Titulo"];
                  $precio = $res["Precio"];
                  $imagen = $res["Imagen"];
                 
                  $idPublicacion = $res["idPublicacion"];

                  echo "<div class='col-md-4'  id='producto'>";
                  echo "<center><a href='publicacion.php?idPublicacion=".$idPublicacion."'><img src='".$imagen."' class='img-rounded '></a></center>";
                  echo "<center><h4>".$titulo."</h4></center>";
                  echo "<center><h5>Precio: $".$precio."</h5></center>";
                  echo "</div>";
      
    }
    
  } else {
    echo "<font color='darkgray'>(sin resultados)</font>";
  }
   
   echo "<div class='col-md-12'>";
  mysqli_free_result($resultados);        
  
  if($total_registros) {
    
    echo "<center>";
    
    if(($pagina - 1) > 0) {
      echo "<a href='index.php?pagina=".($pagina-1)."'>< Anterior</a> ";
    }
    
    for ($i=1; $i<=$total_paginas; $i++){ 
      if ($pagina == $i) 
        echo "<b>".$pagina."</b> "; 
      else
        echo "<a href='index.php?pagina=$i'>$i</a> "; 
    }
    
    if(($pagina + 1)<=$total_paginas) {
      echo " <a href='index.php?pagina=".($pagina+1)."'>Siguiente ></a>";
    }
    
    echo "</center>";
    echo"</div>";
    
  }

        }
         
         $db = new DB_CONNECT(); 

          $consulta = "SELECT * FROM publicacion ORDER BY idPublicacion DESC";

          $query = $db->query($consulta);
          while ($res=mysqli_fetch_array($query)) {

            $titulo = $res["Titulo"];
            $precio = $res["Precio"];
            $imagen = $res["Imagen"];
            $idPublicacion = $res["idPublicacion"];

            echo "<div class='col-md-4'  id='producto'>";
            echo "<center><a href='publicacion.php?idPublicacion=".$idPublicacion."'><img src='".$res["Imagen"]."' class='img-rounded '></a></center>";
            echo "<center><h4>".$titulo."</h4></center>";
            echo "<center><h5>Precio: $".$precio."</h5></center>";
            echo "</div>";
          }
	
>>>>>>> origin/master
      ?>

     </div>








   </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
      </body>
      </html>
