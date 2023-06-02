<?php session_start();

if (!isset($_SESSION['usuario'])) {
	header("location:../login/index.php");
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

    <title>Newton Raphson</title>
  </head>
  <body>
   <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../../img/umg.jpg" alt="..." height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../principal/inicio.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu de Opciones
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="metodoNewtonPrincipal.php">Metodo Newton Raphson</a></li>
            <li><a class="dropdown-item" href="secante.php">Metodo Secante</a></li>
            <li><a class="dropdown-item" href="mullerPrincipal.php">Metodo Muller</a></li>
            <li><a class="dropdown-item" href="gaussPrincipal.php">Metodo Gauss</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../../controllers/logout.php">Cerrar Sesion</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">
  <h1 class="mt-4">Newton Raphson</h1>
  <p>Es un algoritmo para encontrar aproximaciones de los ceros o raices de una funcion real.</p><br>
    <p>Tambien puede ser usado para encontrar el maximo o minimo de una funcion, encontrando los ceros de su primera derivada.</p><br>

</div>

  <div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light">Metodo de Newton Raphson</div>
          </div>
          <form id="contactForm"  name="newton"  method="post" action="../resultados/newtonRaphson.php">

            <!-- Name Input -->
            <div class="form-floating mb-3">
              <input class="form-control" id="valor" name="valor" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor Inicial:</label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor Inicial es Obligatorio.</div>
            </div>

            <!-- Submit button -->
            <div class="d-grid">
              <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Evaluar</button>
            </div>
          </form>
          <!-- End of contact form -->

        </div>
      </div>
    </div>
  </div>
</div>


    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>