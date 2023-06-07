<?php session_start();

if (!isset($_SESSION['usuario'])) {
	header("location:http://localhost/proyectoFinalMetodosNumericos/?contr=loginController&func=Cargar_Pagina_Login");
}
	require("../controladores/metodosController.php");
	if (!empty($_POST)){
		$x1 = $_POST ['x1'];
		$x2 = $_POST ['x2'];
		$x3 = $_POST ['x3'];
        $resultado;
		
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Newton Raphson</title>
  </head>
  <body>
   <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../img/umg.jpg" alt="..." height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu de Opciones
          </a>
           <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="metodoNewtonRaphson.php">Metodo Newton Raphson</a></li>
            <li><a class="dropdown-item" href="metodoSecante.php">Metodo Secante</a></li>
            <li><a class="dropdown-item" href="metodoMuller.php">Metodo Muller</a></li>
            <li><a class="dropdown-item" href="metodoGauss.php">Metodo Gauss</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="logout.php">Cerrar Sesion</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">
  <h1 class="mt-4">Método Muller</h1>
  <p>Muller Method es un algoritmo de búsqueda de raíces para encontrar la raíz de una ecuación de la forma, f(x)=0. Fue descubierto por David E. Muller en 1956.
Comienza con tres suposiciones iniciales de la raíz y luego construye una parábola a través de estos tres puntos, y toma la intersección del eje x con la parábola como la próxima aproximación. Este proceso continúa hasta que se encuentra una raíz con el nivel de precisión deseado.
En este programa se podra resolver por medio de la ecuacion: f(x) = x ^ 3 + 2x ^ 2 + 10x - 20</p><br>
      <h1 class="mt-4">RESULTADO:</h1>

</div>

<div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-3
">
          <div class="text-center">
          
         
                    <?php
							echo "<table >";
                                $resultado = Muller($x1,$x2,$x3);
								echo "</table>";
					?>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>