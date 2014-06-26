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
        <a href="index.html"><img src="img/logo.png" alt=""></a>
      </div>
      <div class="navbar-collapse collapse">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="nueva.html">Nueva publicación</a></li>
         <li><a href="perfil.html">Perfil</a></li>
         <li><a href="publicacion.html">Cerrar sesión</a></li>
       </ul>
       
       <form class="navbar-form navbar-right">
        <div class="left-inner-addon ">
          <i class="glyphicon glyphicon-search" id="glif"></i>
          <input type="text" class="form-control" placeholder="Estoy buscando..."/>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="#">Accesorios para Vehículos</a></li>
        <li><a href="#">Animales y Mascotas</a></li>
        <li><a href="#">Arte y Antigüedades</a></li>
        <li><a href="#">Bebés</a></li>
        <li><a href="#">Cámaras y Accesorios</a></li>
        <li><a href="#">Celulares y Telefonía</a></li>
        <li><a href="#">Computación</a></li>
        <li><a href="#">Consolas y Videojuegos</a></li>
        <li><a href="#">Deporte y Fitness</a></li>
        <li><a href="#">Electrónica, audio y video</a></li>
        <li><a href="#">Hogar y Electrodomésticos</a></li>
        <li><a href="#">Industrias y Oficinas</a></li>
        <li><a href="#">Joyas y Relojes</a></li>
        <li><a href="#">Juegos y Juguetes</a></li>
        <li><a href="#">Libros, Revistas y Comics</a></li>
        <li><a href="#">Música, Películas y Series</a></li>
        <li><a href="#">Ropa, Bolsas y Calzado</a></li>
        <li><a href="#">Salud y Belleza</a></li>
        <li><a href="#">Otras Categorías</a></li>
      </ul>


    </div>

    <div class="col-md-offset-2 main">
      <?php 
      for ($i=1; $i <=8 ; $i++) { 
        echo "<div class='col-md-4'  id='producto'>";
        echo "<center><img src='img/productos/carro".$i.".jpg' class='img-rounded img-responsive'></center>";
        echo "<h4>Lorem ipsum dolor sit amet</h4>";
        echo "<h5>Precio: $5,100</h5>";
        echo "</div>";
      }

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
