<?php 
session_start();
include ("libMenu.php");

$respuesta = "Hubo un error en el registro";
$respuesta1 = "Intentalo de nuevo";
if (isset($_POST['enviar'])) {
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$domicilio = $_POST['domicilio'];
	$telefono = $_POST['telefono'];
	$celular = $_POST['celular'];
	$correo = $_POST['email'];

	require_once dirname(__FILE__).'/db_connect.php';

	$db = new DB_CONNECT(); 

	$sql = "INSERT INTO Usuario (usuario, password, nombre, apellidos, domicilio, telefono, celular, correo) VALUES ('$usuario','$password','$nombre','$apellidos','$domicilio','$telefono', '$celular', '$correo')";

	$db->query($sql);
	$respuesta = "Usuario registrado correctamente";
	$respuesta1 = "¡Ahora puedes iniciar sesión!";
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

				<?php 
				noRegistrado();
				?>

			</div>
		</div>
	</div>
<br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="col-md-6" id="mensajeRegistro" >
					<p class="lead"><?php echo $respuesta ?></p>
					<h5><?php echo $respuesta1  ?></h5>

				</div>
				<div>
					<center><a href="index.php"><img src="img/logo2.png" alt="" id="imagenwelcome"></a></center>
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