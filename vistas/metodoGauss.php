<?php session_start();

if (!isset($_SESSION['usuario'])) {
	header("location:http://localhost/proyectoFinalMetodosNumericos/?contr=loginController&func=Cargar_Pagina_Login");
}
	require("../controladores/metodosController.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Metodo de Gauss</title>
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
          <a class="nav-link" aria-current="page" href="../principal/inicio.php">Inicio</a>
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
  <h1 class="mt-4">Metodo de Gauss.</h1>
  <p>Se conoce como forma matricial en la cual se escriben los coeficientes sin las incognitas separados por una linea vertical en donde se toma el primer coeficiente de la ecuación número uno, y se le busca un número que multiplicado y luego sumado o restado con el primer coeficiente de la segunda ecuación sea igual a cero.</p><br>

</div>

  <div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light">Metodo de Gauss
            </div>
          </div>
          <form id="contactForm"  method="post" action="metodoGaussResultado.php">

            <!-- Name Input -->
            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="x1" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de X1: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de X1 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="y1" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de Y1: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de Y1 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="z1" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de Z1: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de Z1 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="t1" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de T1: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de T1 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="x2" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de X2: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de X2 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="y2" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de Y2: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de Y2 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="z2" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de Z2: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de Z2 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="t2" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de T2: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de T2 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="x3" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de X3: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de X3 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="y3" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de Y3: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de Y3 es Obligatorio.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="z3" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de Z3: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de Z3 es Obligatorio.</div>
            </div>

             <div class="form-floating mb-3">
              <input class="form-control" id="x1" name="t3" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Valor de T3:</label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de T3 es Obligatorio.</div>
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