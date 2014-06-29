<?php 
include ("libMenu.php");
session_start(); 
$loginResult = $_SESSION["loginStatus"];

if (isset($_SESSION['idUsuario'])){
  $idUsuario = $_SESSION['idUsuario'];
  echo $idUsuario;     


  $query = "SELECT * FROM usuario WHERE idUsuario =".$idUsuario;
 
  require_once dirname(__FILE__).'/db_connect.php';

  $db = new DB_CONNECT();

  if ($data = $db->query($query)) {
    if ($db->numRows($data)>0) {
      if ($row = mysqli_fetch_array($data)) {
        $Nombre = $row["Nombre"];
        $Usuario = $row["Usuario"];
        $Apellidos = $row["Apellidos"];
        $Domicilio = $row["Domicilio"];
        $Telefono = $row["Telefono"];

      }
    }
  }

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



<div class='container-fluid'>
  <div class='row'>
    <div class='container'>
      <div class='row' id='titulo'><h3>Perfil de usuario</h3></div>
      
      <div class='row'>
        <div class='col-md-3'>
        <h2><?php echo $Nombre; ?></h2>
      </div>
        </div>

        <div class='row'>
      <div class='col-md-3'>
        
        <img src='img/perfil.png' class='img-rounded img-responsive' alt='Responsive image' id='image1n'>
        
      </div>
      <div class='col-md-4'>
       <p class='datos'>Nombre:</p>
       <p><?php echo $Usuario; ?></p>
       <p class='datos'>Apellidos: </p>
       <p><?php echo $Apellidos; ?></p>
       <p class='datos'>Domicilio:</p>
       <p><?php echo $Domicilio; ?></p>

     </div>
     <div class='col-md-4'>
       <p class='datos'>Teléfono:</p>
       <p><?php echo $Telefono; ?></p>
       <p class='datos'>Correo: </p>
       <p>Lorem ipsum dolor sit amet</p>
     </div>

    </div>

      <button class='btn btn-custom' id='bpublicar' name='bconfig'><i class='glyphicon glyphicon-cog white' ></i>Configurar datos</button>
    
</div>
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



<?php
require_once dirname(__FILE__).'/db_connect.php';

    $db = new DB_CONNECT();
    $query =('SELECT * FROM publicacion WHERE Usuario_idUsuario='.$idUsuario);
    $result = $db->query($query);

echo "    <div class='container-fluid'>
    <div class='row'>
    <div class='container'>


      <div class='row'>
        <div class='col-md-3'>
        <h2>Publicaciones</h2>
      </div>
        </div>";

      
  

while ($row = $result->fetch_array()) {
  # code...

  echo "
       <div class='container-fluid' >
            <div class='col-md-2'>
                    <img src='http://lorempixel.com/100/100' />
                </div>
                <div class='col-md-2'>
                    <p><strong>Título</strong></p>
                    <p>".$row['Titulo']."</p>
                </div>
                 <div class='col-md-2'>
                    <p><strong>Precio</strong></p>
                    <p>".$row['Precio']."</p>
                </div>
                 <div class='col-md-2'>
                    <p><strong>Descripcion</strong></p>
                    <p>".$row['Descripcion']."</p>
                </div>
                 <div class='col-md-2'>
                    <p><strong>Categoría</strong></p>
                    <p>".$row['Categoria_idCategoria']."</p>
                </div>
                <button  name='bconfig'><i class='glyphicon glyphicon-cog white' ></i>Borrar</button>
           </div>";

        }

        echo "  </div>
  </div>
</div>";

   


?>
