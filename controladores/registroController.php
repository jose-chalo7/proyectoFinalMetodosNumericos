<?php

class registroController{
	public function Cargar_Pagina_Registro(){
		require_once "vistas/registroForm.php";
	}

	public function Registrar(){
		if (isset($_POST)) {
	       $nombre = isset($_POST["nombre_usuario"]) && !is_numeric($_POST["nombre_usuario"]) && !empty($_POST["nombre_usuario"]) ? $_POST["nombre_usuario"]: false;
	       $password = password_hash($_POST['password_usuario'], PASSWORD_DEFAULT);

			if ($nombre&&$password) {
				require_once "modelo/registro.php";
				$registro = new registrarModel();//inicializar el modelo
				$registro->setUsuario($nombre);
				$registro->setPassword($password);

					if ($registro->registrarUsuario()) {
						 header("location:vistas/registroSuccess.php");
					}else{
					header("location:vistas/loginExceptionPage.php");
					}
			}

        }

	}
}

?>