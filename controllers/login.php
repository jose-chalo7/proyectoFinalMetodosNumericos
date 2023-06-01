<?php
    session_start();
	include "usuarioController.php";

	$usuario = $_POST['usuarioLogin'];
	$password = $_POST['passwordLogin'];

	$Auth = new usuarioController();
	
	if ($Auth->loguear($usuario,$password)) {
	 header("location:../views/principal/inicio.php");
}else{
	header("location:../views/login/loginExceptionPage.php");
}


?>