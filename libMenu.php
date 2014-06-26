<?php
function registrado()
{
	//Aqui imprime los menus a los que tiene acceso el usuario
	//registrado
	echo "<ul class='nav navbar-nav navbar-right'>";
	echo "<li><a href='nueva.html'>Nueva publicación</a></li>";
	echo "<li><a href='perfil.php'>Pefil</a></li>";
	echo "<li><a href='publicacion.html'>Cerrar sesión</a></li>";
	echo " </ul>";

//Esta es la barrita para hacer las busquedas
	echo "<form class='navbar-form navbar-right' role='form' method='POST' action='getLogin.php'>";
	echo "<div class='form-group'>";
	echo "<div class='left-inner-addon'>";
	echo "<i class='glyphicon glyphicon-search' id='glif'></i>";
	echo "<input type='text' class='form-control' name='usuario' placeholder='Estoy buscando...'/>";
	echo "</div>";
	echo "</div>";               
	echo"</form>";
}


function noRegistrado()
{
//Aqui imprime los menus a los que tiene acceso el usuario
	//NO registrado
	echo "<ul class='nav navbar-nav navbar-right'>";
	echo "<li><a href='registro.php'>Registrarse</a></li>";
	echo " </ul>";

//FORMULARIO para el login
	echo "<form class='navbar-form navbar-right' role='form' method='POST' action='getLogin.php'>";
	echo "<div class='form-group'>";
	echo "<div class='left-inner-addon'>";
	echo "<i class='glyphicon glyphicon-user' id='glif'></i>";
	echo "<input type='text' class='form-control' name='usuario' placeholder='Estoy buscando...'/>";
	echo "</div>";
	echo "</div>";
	echo "<div class='form-group'>";
	echo "<div class='left-inner-addon'>";
	echo "<i class='glyphicon glyphicon-star' id='glif'></i>'";
	echo "<input type='password' class='form-control' name='password' placeholder='Contraseña'/>";
	echo "</div>";
	echo "</div>";
	echo "<button type='submit' name='enviar' class='btn btn-custom'>Iniciar sesión</button>";
	echo"</form>";
}
?>