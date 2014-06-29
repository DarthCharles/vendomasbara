<?php 

session_start(); 
include ("seguridad.php");
include ("libMenu.php");
$loginResult = $_SESSION["loginStatus"];

//Inicializamos la variable de conexion a la BD para usarla posteriormente


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

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/formValidation.js"></script>
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
   <?php  


   ?>
   <div class="container">
    <div class="col-md-6">
      <div id="mailForm">

      </div>
      <div class="mailForm">
      <form method="POST" action="registrar_publicacion.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="titulo">Título de la publicación</label><span id="errMesTitulo"></span>
          <input type="text" class="form-control" id="titulo" placeholder="Ingrese título" name="titulo">
        </div>

        <div class="form-group">  
          <label for="precio">Precio</label><span id="errMesPrecio"></span>
          <input type="text" class="form-control" id="precio" name="precio">
        </div>

        <div class="form-group">
          <label for="exampleInputFile">Imagen</label>
          <input type="file" id="file" name="file">
        </div>

        <div class="form-group">
          <label for="estado">Estado:</label>
          <select class="form-control" name="estado">
            <option value="Nuevo">Nuevo</option>
            <option value="Usado">Usado</option>
          </select>
        </div>

          <div class="form-group">
            <label for="categoria">Categoría:</label>
            <select class="form-control" name="categoria">
              <?php 
              require_once dirname(__FILE__).'/db_config.php';
              $db = new DB_CONNECT();
              $query_categorias = "SELECT * FROM categoria ORDER BY idCategoria";
              $result = $db->query($query_categorias);

              while ($row = $result->fetch_array()) {
                ?>

                <option value='<?php echo $row['idCategoria']; ?>'><?php echo $row['Nombre_Categoria']; ?></option>

                <?php
              }
              ?>

            </select>

          </div>
          <label for="textarea">Descripción:</label><span id="errMesDescripcion"></span>
          <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>

          <button type="submit" class="btn btn-custom" id="regPublicacion" name="enviar">Publicar</button>
        </div>
      </form>
    </div>



    <div class="col-md-6">
     <label for="imagen">Vista previa:</label>
     <img src="img/imagen.jpg" class="img-rounded img-responsive" alt="Responsive image" id="imagen">
   </div>
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
