<?php 
include ("libMenu.php");
session_start(); 
$loginResult = $_SESSION["loginStatus"];
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
   <?php  


   ?>
   <div class="container">
    <div class="col-md-6">

     <form method="POST" action="registrar_publicacion.php" enctype="multipart/form-data">

      <div class="form-group">
        <label for="titulo">Título de la publicación</label>
        <input type="text" class="form-control" id="titulo" placeholder="Ingrese título" name="titulo">
      </div>

      <div class="form-group">  
        <label for="precio">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio">
      </div>

      <div class="form-group">
        <label for="exampleInputFile">Imagen</label>
        <input type="file" id="exampleInputFile" name="file">
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
          <option value="Nuevo">Accesorios para Vehículos</option>
          <option value="Usado">Animales y Mascotas</option>
          <option value="Usado">Arte y Antigüedades</option>
          <option value="Usado">Bebés</option>
          <option value="Usado">Cámaras y Accesorios</option>
          <option value="Usado">Celulares y Telefonía</option>
          <option value="Usado">Computación</option>
          <option value="Usado">Consolas y Videojuegos</option>
          <option value="Usado">Deporte y Fitness</option>
          <option value="Usado">Electrónica, audio y video</option>
          <option value="Usado">Hogar y Electrodomésticos</option>
          <option value="Usado">Industrias y Oficinas</option>
          <option value="Usado">Joyas y Relojes</option>
          <option value="Usado">Juegos y Juguetes</option>
          <option value="Usado">Libros, Revistas y Comics</option>
          <option value="Usado">Música, Películas y Series</option>
          <option value="Usado">Ropa, Bolsas y Calzado</option>
          <option value="Usado">Salud y Belleza</option>
          <option value="Usado">Otras Categorías</option>
        </select>

      </div>
      <label for="textarea">Descripción:</label>
      <textarea class="form-control" rows="3" id="textarea" name="descripcion"></textarea>

      <button type="submit" class="btn btn-custom" id="bpublicar" name="enviar">Publicar</button>

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
