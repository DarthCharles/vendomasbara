<?php

session_start();
include ("seguridad.php");

include ("libMenu.php");

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
				<a href="index.html"><img src="img/logo.png" alt=""></a>
			</div>

			<div class="navbar-collapse collapse">

				<?php 
				Registrado();
				?>

			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container">
			<div class = "for">
			<div class = "mailForm">
				<h3>Editar datos de usuario</h3>
				<form method="POST" id="form_Editar_usuario" action="editardatos_php.php">
					<div class="col-md-6">
						
						<label>Password:</label><span id="errMesPassword"></span>
						<input type="password" name="password"  class="form-control" id="password" maxlength="15"></br>

						<label>Repetir Password:</label><span id="errMesRepPassword"></span>
						<input type="password" name="repPassword"  class="form-control" id="repPassword" maxlength="15"></br>

						<label>Correo:</label><span id="errMesEmail"></span>
						<input type="text" name="email"  class="form-control" id="email" maxlength="50"></br>

					</div>
					<div class="col-md-6">
						
						<label>Domicilio:</label><span id="errMesDomicilio"></span>
						<input type="text" name="domicilio"  class="form-control" id="domicilio" maxlength="100"></br>

						<label>Telefono:</label><span id="errMesTelefono"></span>
						<input type="text" name="telefono"  class="form-control" id="telefono" maxlength="10"></br>

						<label>Celular:</label><span id="errMesCelular"></span>
						<input type="text" name="celular"  class="form-control" id="celular" maxlength="10"></br>


						<input type="submit" name="enviar"  id="modUsuario" value="Guardar cambios"  class="btn btn-custom"> 	
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

