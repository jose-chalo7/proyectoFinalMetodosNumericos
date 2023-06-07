<?php
//Controlador index para acceder a clases y funciones.

if(isset($_GET["contr"])){ //comprobar si existe una funcion de  controlador que viene de la url
	$controlador = $_GET["contr"]; //almacenamos en variable llamada controlador
	require_once "controladores/$controlador.php";
	if (class_exists($controlador)) {  // comprobamos si la clase existe.
		$clase_contr = new $controlador(); // si existe se inicializa la clase
		if (isset($_GET["func"]) && method_exists($clase_contr,$_GET["func"])) { // si dentro de la clase existe el metodo que viene por GET
			$action = $_GET["func"]; //almacenar el metodo en la vfaciable action.
			$clase_contr->$action();//Acceder al metodo determinado.
		 }
     }
}

?>