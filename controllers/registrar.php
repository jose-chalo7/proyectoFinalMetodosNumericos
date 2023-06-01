<?php
    session_start();
	include "usuarioController.php";

	$usuario = $_POST['nombre_usuario'];
	$password = password_hash($_POST['password_usuario'], PASSWORD_DEFAULT);

	$Auth = new usuarioController();
	
	if ($Auth->registrar($usuario,$password)) {
	 header("location:../views/login/successPage.php");
}else{
	 header("location:../views/login/registroExceptionPage.php");
}

?>