<?php 
$respuesta = "Hubo un error en el registro";

if (isset($_POST['enviar'])) {
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$domicilio = $_POST['domicilio'];
	$telefono = $_POST['telefono'];

	require_once dirname(__FILE__).'/db_connect.php';

	$db = new DB_CONNECT(); 

	$sql = "INSERT INTO Usuario (usuario, password, nombre, apellidos, domicilio, telefono) VALUES ('$usuario','$password','$nombre','$apellidos','$domicilio','$telefono')";

	$db->query($sql);
	$respuesta = "Usuario registrado correctamente";

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
		<div class="row">
			<div class="container">
			<div class="col-md-6">
				<p class="lead"><?php echo $respuesta ?></p>
			</div>
			<div>
				<img src="img/logo2.png" alt="">
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