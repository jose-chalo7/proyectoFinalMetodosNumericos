<?php session_start();

if (!isset($_SESSION['usuario'])) {
	header("location:http://localhost/proyectoFinalMetodosNumericos/?contr=loginController&func=Cargar_Pagina_Login");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pagina Principal</title>
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
  <h1 class="mt-4">Metodos Numericos</h1>
  <p>Sistema web para calculo y resolucion de ecuaciones por medio de 4 Metodos.</p><br>
    <p>Seleccione una de las Opciones en el Menu Desplegable en la parte superior derecha...</p><br>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>