<?php

class registrarModel{
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

	public function registrarUsuario(){
		$sql = mysqli_query($this->conexion(),"INSERT INTO t_usuarios values(NULL,'{$this->usuario}','{$this->password}')");

				if ($sql) {
					$_SESSION['usuario'] = $usuario;
					return true;
                 }else {
	                return false;
                   }

	}

}

?>