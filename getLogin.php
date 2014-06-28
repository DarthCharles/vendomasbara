<?php
require_once dirname(__FILE__).'/db_connect.php';

session_start();

$user = $_POST["usuario"];
$pass = $_POST["password"];


$db = new DB_CONNECT(); 

$consulta = "SELECT * FROM usuario WHERE Usuario='".$user."' and Password='".$pass."'";


$query = $db->query($consulta);

$rows = $db->numRows($query);

if ($rows == 0) {
	$db->Close();
	header("Location: index.php?login=false");
   
}else{

$res=mysqli_fetch_array($query);

    
	$_SESSION["idUsuario"] = $res['idUsuario'];
	$_SESSION["user"] = $user;
	$_SESSION["loginStatus"] = "true";
	$_SESSION["auth"] = 1;
	$db->Close();
	header("Location: index.php?login=true");

	
	
}


?>