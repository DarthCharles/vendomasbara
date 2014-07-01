<?php 

	$usuario = $_POST['usuario'];
	$sql = "SELECT usuario FROM Usuario WHERE Usuario = '$usuario'";
	require_once dirname(__FILE__).'/db_connect.php';
	$db = new DB_CONNECT(); 
	$result = $db->query($sql);
	if ($db->numRows($result)>0) {
		echo 0;
	}else{
		echo 1;
	}

 ?>