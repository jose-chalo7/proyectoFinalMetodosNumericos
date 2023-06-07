<?php

class loginController{
	public function Cargar_Pagina_login(){
		require_once "vistas/loginForm.php";
	}

	public function Ingresar(){
		if (isset($_POST)) {
	       $nombre = isset($_POST["usuarioLogin"]) && !is_numeric($_POST["usuarioLogin"]) && !empty($_POST["usuarioLogin"]) ? $_POST["usuarioLogin"]: false;
	       $password = !empty($_POST["passwordLogin"]) ? $_POST["passwordLogin"]: false;

			if ($nombre&&$password) {
				require_once "modelo/login.php";
				$ingreso = new ingresarModel();//inicializar el modelo
				$ingreso->setUsuario($nombre);
				$ingreso->setPassword($password);

					if ($ingreso->validarUsuario()) {
						 header("location:vistas/inicio.php");
					}else{
					header("location:vistas/loginExceptionPage.php");
					}
			}

        }

	}
}

?>