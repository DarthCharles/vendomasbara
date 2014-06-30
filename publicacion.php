<?php 
include ("libMenu.php");
session_start(); 
$loginResult ="";
if (isset($_SESSION["loginStatus"])){
 
  $loginResult = $_SESSION["loginStatus"];
} 
if (isset($_GET['idPublicacion'])) {
  $idPublicacion = $_GET['idPublicacion'];

  $query = "SELECT u.*, p.*, c.Nombre_Categoria FROM Publicacion p INNER JOIN Categoria c on p.Categoria_idCategoria = c.idCategoria INNER JOIN Usuario u on u.idUsuario = p.Usuario_idUsuario WHERE p.idPublicacion =".$idPublicacion;

  require_once dirname(__FILE__).'/db_connect.php';

  $db = new DB_CONNECT();

  if ($data = $db->query($query)) {
    if ($db->numRows($data)>0) {
      if ($row = mysqli_fetch_array($data)) {
        $titulo = $row["Titulo"];
        $precio = $row["Precio"];
        $estado = $row["Estado"];
        $descripcion = $row["Descripcion"];
        $imagen = $row["Imagen"];
        $nombre_Vendedor = $row["Nombre"];
        $telefono_Vendedor = $row["Telefono"];
        $celular_Vendedor = $row["Celular"];
        $ubicacion_Vendedor = $row["Domicilio"];
        $correo_Vendedor = $row["Correo"];
        $nombre_categoria = $row["Nombre_Categoria"];
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

  <div class="container">
    <div class="row" id="titulo"><h3><?php echo $titulo; ?></h3></div>
    <div class="row">
      <div class="col-md-5">
        <img src="<?php echo $imagen; ?>" class="img-rounded img-responsive" alt="Responsive image" id="image1n">
      </div>
      <div class="col-md-7">
       <p class="datos">Categoría:</p>
       <p><?php echo $nombre_categoria ?></p>
       <p class="datos">Precio: </p>
       <p>$ <?php echo $precio; ?></p>
       <p class="datos">Estado:</p>
       <p><?php echo $estado; ?></p>

     </div>
   </div>
   <div class="row">
     <div class="col-md-12">
       <p class="datos">Descripción:</p>
       <p><?php echo $descripcion; ?></p>
     </div>
   </div>
   <div class="row">
     <div class="col-md-5">

       <h4>Datos del vendedor</h4>
       <p class="datos">Nombre:</p>
       <p><?php echo $nombre_Vendedor; ?></p>
       <p class="datos">Telefono: </p>
       <p><?php echo $telefono_Vendedor; ?></p>
       <p class="datos">Celular: </p>
       <p><?php echo $celular_Vendedor; ?></p>
       <p class="datos">Ubicación:</p>
       <p><?php echo $ubicacion_Vendedor; ?></p>
     </div>
     <div class="col-md-6">
       <div class="mailForm">
         <h4>Ponte en contacto con el vendedor</h4>
         <form action="" method="post" id="mycontactform"  role="form">
          <label for="name">Tu nombre:</label><span id="errMesName"></span><br />
          <input type="text" name="name" id="name" class="form-control" /><br />
          <label for="email">Tu email:</label><span id="errMesEmail"></span><br />
          <input type="text" name="email" id="email" class="form-control" /><br />
          <label for="message">Pregunta o comentario:</label><span id="errMesMessage"></span><br />
          <textarea name="message" id="message" maxlength="65535" cols="18" rows="3" class="form-control" 
          ></textarea>
          <input type = "hidden" name = "correo_vendedor" value = "<?php echo $correo_Vendedor; ?>">
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
