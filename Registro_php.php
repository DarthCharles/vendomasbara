<?php 
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


} else {

}
?>