<?php session_start();

class ingresarModel{
	private $usuario;
	private $password;

	public function conexion(){
		$conexion = mysqli_connect("localhost","root","","proyecto_metodos_numericos");
		return $conexion;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function getPassword(){
		return $this->password;
	}

	public function validarUsuario(){
		$sql = mysqli_query($this->conexion(),"SELECT * FROM t_usuarios
				WHERE usuario = '{$this->usuario}'");

				$passwordExist = mysqli_fetch_array($sql)['password'];

				if (password_verify($this->password, $passwordExist)) {
					$_SESSION['usuario'] = $this->usuario;
					return true;
                 }else {
	                return false;
                   }

	}

}

?>