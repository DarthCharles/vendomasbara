<?php 
session_start(); 

  if (isset($_POST['enviar'])) {

    if (!file_exists("img/productos/".$_FILES["file"]["name"])) {
      move_uploaded_file($_FILES["file"]["tmp_name"], "img/productos/".$_FILES["file"]["name"]);
    }

    require_once dirname(__FILE__).'/db_connect.php';

    $db = new DB_CONNECT();

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $imagen = "img/productos/".$_FILES["file"]["name"];
    $idCategoria = $_POST['categoria'];
    $idUsuario = $_SESSION["idUsuario"];
    $query = "INSERT INTO Publicacion
    (Titulo,Precio,Descripcion,Estado,Imagen,Categoria_idCategoria,Usuario_idUsuario)
    VALUES('$titulo','$precio','$descripcion','$estado','$imagen','$idCategoria',".$idUsuario.")";
    
    if ($db->query($query)) {
    	$idLast = $db->lastInsertedId();
		header("Location: publicacion.php?idPublicacion=".$idLast);
    }
  }

 ?>