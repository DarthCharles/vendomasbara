<?php 
	if ($_POST['usuario']&&$_POST['password']&&$_POST['nombre']&&$_POST['apellidos']&&$_POST['domicilio']&&$_POST['telefono']) {
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
	}
 ?>