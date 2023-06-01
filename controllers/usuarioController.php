<?php

session_start();
	include "../models/conexion.php";

	class UsuarioController extends Conexion{
	
		public function registrar($usuario,$password){
			$conexion = parent::conectar();
			$sql = "INSERT INTO t_usuarios (usuario,password)
					VALUES (?,?)";

					$query = $conexion->prepare($sql);
					$query ->bind_param('ss', $usuario, $password);

					return $query->execute();

	    }
	
	
	public function loguear($usuario,$password){
		$conexion = parent::conectar();
		$passwordExist ="";
		$sql = "SELECT * FROM t_usuarios
				WHERE usuario = '$usuario'";

				$respuesta = mysqli_query($conexion,$sql);
				$passwordExist = mysqli_fetch_array($respuesta)['password'];

				if (password_verify($password, $passwordExist)) {
					$_SESSION['usuario'] = $usuario;
					return true;
                 }else {
	                return false;
                   }

	}
	
}



?>