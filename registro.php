<?php include ("libMenu.php"); ?>
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

				<?php 
				noRegistrado();
				?>

			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container">
			<div class = "for">
			<div class = "mailForm">
				<h3>Registro de Usuario</h3>
				<form method="POST" id="form_Registro_usuario" action="Registro_php.php">
					<div class="col-md-6">
						<label>Usuario:</label><span id="errMesUsuario"></span>
						<input type="text" name="usuario"  class="form-control" id="usuario"></br>

						<label>Password:</label><span id="errMesPassword"></span>
						<input type="password" name="password"  class="form-control" id="password"></br>

						<label>Repetir Password:</label><span id="errMesRepPassword"></span>
						<input type="password" name="reppassword"  class="form-control" id="repPassword"></br>

						<label>Correo:</label><span id="errMesEmail"></span>
						<input type="text" name="email"  class="form-control" id="email"></br>

					</div>
					<div class="col-md-6">
						<label>Nombre:</label><span id="errMesNombre"></span>
						<input type="text" name="nombre"  class="form-control" class="form-control" id="nombre"> </br>

						<label>Apellidos:</label><span id="errMesApellido"></span>
						<input type="text" name="apellidos"  class="form-control" id="apellido"></br>

						<label>Domicilio:</label><span id="errMesDomicilio"></span>
						<input type="text" name="domicilio"  class="form-control" id="domicilio"></br>

						<label>Telefono:</label><span id="errMesTelefono"></span>
						<input type="text" name="telefono"  class="form-control" id="telefono"></br>

						<label>Celular:</label><span id="errMesCelular"></span>
						<input type="text" name="celular"  class="form-control" id="celular"></br>


						<input type="submit" name="enviar"  id="regUsuario" value="Registrarme"  class="btn btn-custom"> 	
					</div>
				</form>
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

