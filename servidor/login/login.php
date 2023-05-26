<?php
    session_start();
	include "../../clases/auth.php";

	$usuario = $_POST['usuarioLogin'];
	$password = $_POST['passwordLogin'];

	$Auth = new auth();
	
	if ($Auth->loguear($usuario,$password)) {
	 header("location:../../inicio.php");
}else{
	header("location:loginExceptionPage.php");
}

?>