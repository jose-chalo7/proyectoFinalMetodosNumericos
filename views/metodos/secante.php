<?php session_start();

if (!isset($_SESSION['usuario'])) {
	header("location:../login/login.php");
}
require("../../controllers/funciones.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
            <li><a class="dropdown-item" href="#">Metodo Muller</a></li>
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
  <h1 class="mt-4">Metodo de la Secante.</h1>
  <p>Metodo de la Secante para el calculo de la funcion f(x) = f(x)=x³+2x²+10x-20 con el método de la secante.</p><br>

</div>

  <div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light">Metodo de la Secante</div>
          </div>
          <form id="contactForm"  name="newton"  method="post">

            <!-- Name Input -->
            <div class="form-floating mb-3">
              <input class="form-control" id="x0" name="x0" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Ingrese la aproximación inicial de x0: </label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de x0 es Obligatorio.</div>
            </div>

             <div class="form-floating mb-3">
              <input class="form-control" id="x1" name="x1" type="text" placeholder="Valor Inicial" data-sb-validations="required" />
              <label for="name">Ingrese la aproximación inicial de x1:</label>
              <div class="invalid-feedback" data-sb-feedback="valor:required">El valor de x1 es Obligatorio.</div>
            </div>

            <!-- Submit button -->
            <div class="d-grid">
              <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Evaluar</button>
            </div>
          </form>
          <!-- End of contact form -->

          <br>
          <?php

          if (isset ($_POST['x0']) && isset ($_POST['x1'])) 
          {

          $x0 = floatval($_POST['x0']);
          $x1 = floatval($_POST['x1']);
          $n = 1;

          ?>
          <br>
          <h4>Resultados:</h4>

          <table border="5" cellpadding="1" cellspacing="0">
          <thead>
            <tr align="center"><th>No.</th><th>X<sub><sub>N</sub></sub></th><th>Error?</th></tr>
           </thead>
            <tbody>
            <tr><td align="center">0</td><td align="center"><?php echo $x0;?></td><td>&nbsp;</td></tr>

        <?php
            
        do {
            $err = abs($x0-$x1);
            echo "<tr><td align=\"center\">$n</td><td align=\"center\"> $x1</td><td align=\"center\">$err</td></tr>\n";
            if($err!=0){
                $temp = $x1;
                $x1 = $x1 - ($x1 -$x0
                ) * secante($x1) / (secante($x1) - secante($x0));
                $x0 = $temp;
            }
            $n++;

        } while ($err>TOLERANCIA && $n<=ITERACIONES_MAXIMAS);

        ?>


        </tbody>
        </table>
        <br>

    <?php
        
        if($n<ITERACIONES_MAXIMAS)
        echo "La solucion es: $x1";
        else 
        echo "No se encontraron , raizes, cambiar aproximaciones iniciales o aumentar ITERACIONES_MAXIMAS";

          }
    ?>

        </div>
      </div>
    </div>
  </div>
</div>


    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>