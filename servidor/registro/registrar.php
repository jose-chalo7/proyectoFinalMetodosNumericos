<?php
    session_start();
	include "../../clases/auth.php";

	$usuario = $_POST['nombre_usuario'];
	$password = password_hash($_POST['password_usuario'], PASSWORD_DEFAULT);

	$Auth = new auth();
	
	if ($Auth->registrar($usuario,$password)) {
	 header("location:successPage.php");
}else{
	 header("location:registroExceptionPage.php");
}

?>