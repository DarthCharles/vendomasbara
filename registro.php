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
			<h3>Registro de Usuario</h3>
				<form method="POST" action="Registro_php.php">
					<label>Usuario:</label>
					<input type="text" name="usuario"  class="form-control" ></br>

					<label>Clave:</label>
					<input type="password" name="password"  class="form-control" ></br>

					<label>Repetir Clave:</label>
					<input type="password" name="reppassword"  class="form-control" ></br>

					<label>Nombre:</label>
					<input type="text" name="nombre"  class="form-control" > </br>

					<label>Apellidos:</label>
					<input type="text" name="apellidos"  class="form-control" ></br>

					<label>Domicilio:</label>
					<input type="text" name="domicilio"  class="form-control" ></br>

					<label>Telefono:</label>
					<input type="text" name="telefono"  class="form-control" ></br>


					<input type="submit" name="enviar" value="Registrarme"  class="btn btn-custom"> 	
				</form>

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

