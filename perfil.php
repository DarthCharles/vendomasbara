<?php 
session_start();
include ("seguridad.php");

include ("libMenu.php");
 
$loginResult = $_SESSION["loginStatus"];

if (isset($_SESSION['idUsuario'])){
  $idUsuario = $_SESSION['idUsuario'];

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
        $Celular = $row["Celular"];
        $Correo = $row["Correo"];

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

  <script type="text/javascript">

  function confirmacion()
  {
    var respuesta=confirm("¿Seguro que desea borrar esta publicación?")
    var id=document.getElementById("botonborrar").value;
    if (respuesta) {
      //alert("La publicación se ha borrado")

      window.location ="borrarpost.php?id="+id;

    }

  }

  </script>

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
        <h2><?php echo $Usuario; ?></h2>
      </div>
        </div>

        <div class='row'>
      <div class='col-md-3'>
        
        <img src='img/perfil.png' class='img-rounded img-responsive' alt='Responsive image' id='image1n'>
        
      </div>
      <div class='col-md-4'>
       <p class='datos'>Nombre:</p>
       <p><?php echo $Nombre; ?></p>
       <p class='datos'>Apellidos: </p>
       <p><?php echo $Apellidos; ?></p>
       <p class='datos'>Domicilio:</p>
       <p><?php echo $Domicilio; ?></p>

     </div>
     <div class='col-md-4'>
       <p class='datos'>Teléfono:</p>
       <p><?php echo $Telefono; ?></p>
       <p class='datos'>Celular:</p>
       <p><?php echo $Celular; ?></p>
       <p class='datos'>Correo: </p>
       <p><?php echo $Correo; ?></p>
     </div>

    </div>

      <button class='btn btn-custom' id='bpublicar' name='bconfig' onClick="window.location.href='editardatos.php'"><i class='glyphicon glyphicon-cog white' ></i>Configurar datos</button>
    
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
       <hr  width='95%' />
            <div class='col-md-2'>
                    <img src='".$row['Imagen']."' width='100' height ='100' />
                </div>
                <div class='col-md-4'>
                    <p><strong>Título</strong></p>
                    <p>".$row['Titulo']."</p>
                </div>
                 <div class='col-md-2'>
                    <p><strong>Precio</strong></p>
                    <p>$".$row['Precio']."</p>
                </div>
                
                
                 <div class='col-md-2'>
                    
                    <a href='publicacion.php?idPublicacion=".$row["idPublicacion"]."'> Ver publicación</a>
                </div>
                
                <button  name='bconfig' id='botonborrar' onClick='confirmacion()' value=".$row['idPublicacion']."><i class='glyphicon glyphicon-remove' ></i>Borrar</button>
           </div>";

        }

        echo "  
<hr width='95%'/>
        </div>
  </div>
</div>";

   


?>
