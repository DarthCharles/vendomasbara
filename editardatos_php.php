<?php 
session_start();
include ("libMenu.php");

$respuesta = "Hubo un error en el registro";
$respuesta1 = "Intentalo de nuevo";
if (isset($_POST['enviar'])) {
	
	$password = $_POST['password'];	
	$domicilio = $_POST['domicilio'];
	$telefono = $_POST['telefono'];
	$celular = $_POST['celular'];
	$correo = $_POST['email'];

	echo $password;
	echo $domicilio;
	echo $telefono;
	echo $celular;
	echo $correo;


	require_once dirname(__FILE__).'/db_connect.php';

	$db = new DB_CONNECT(); 

	$query = "UPDATE Usuario SET Password='".$password."', Domicilio='".$domicilio."', Telefono=".$telefono.", Celular=".$celular.", Correo='".$correo."'  WHERE idUsuario=".$_SESSION["idUsuario"];
	echo "$query";
	$db->query($query);
	header("Location: perfil.php");

}
?>
