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
        <a href="index.html"><img src="img/logo.png" alt=""></a>
      </div>
      <div class="navbar-collapse collapse">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="nueva.html">Nueva publicación</a></li>
         <li><a href="perfil.html">Perfil</a></li>
         <li><a href="#">Cerrar sesión</a></li>
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

  <div class="container">
    <div class="row" id="titulo"><h3>Título del post</h3></div>
    <div class="row">
      <div class="col-md-6">
        <img src="img/imagen.jpg" class="img-rounded img-responsive" alt="Responsive image" id="image1n">
      </div>
      <div class="col-md-6">
       <p class="datos">Categoría:</p>
       <p>Lorem ipsum dolor sit amet</p>
       <p class="datos">Precio: </p>
       <p>$ 0000.00</p>
       <p class="datos">Estado:</p>
       <p>Lorem ipsum dolor sit amet</p>

     </div>
   </div>
   <div class="row">
     <div class="col-md-12">
       <p class="datos">Descripción:</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row">
     <div class="col-md-5">

       <h4>Datos del vendedor</h4>
       <p class="datos">Nombre:</p>
       <p>Lorem ipsum dolor sit amet</p>
       <p class="datos">Telefono: </p>
       <p>Lorem ipsum dolor sit amet</p>
       <p class="datos">Celular: </p>
       <p>Lorem ipsum dolor sit amet</p>
       <p class="datos">Ubicación:</p>
       <p>Lorem ipsum dolor sit amet</p>
     </div>
     <div class="col-md-6">
       <div class="mailForm">
         <h4>Ponte en contacto con el vendedor</h4>
         <form action="" method="post" id="mycontactform"  role="form">
          <label for="name">Tu nombre:</label><span id="errMes"></span><br />
          <input type="text" name="name" id="name" class="form-control" /><br />
          <label for="email">Tu email:</label><span id="errMes2"></span><br />
          <input type="text" name="email" id="email" class="form-control" /><br />
          <label for="message">Pregunta o comentario:</label><span id="errMes3"></span><br />
          <textarea name="message" id="message" maxlength="1000" cols="18" rows="3" class="form-control" 
          ></textarea>
          <button type="submit" class="btn btn-custom" id="bpublicar">Enviar</button>
          <div id="success" style="color:red;"></div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
  </html>
