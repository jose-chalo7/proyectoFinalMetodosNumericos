﻿<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">

    <title>proyectoFinalMetodosNumericos</title>
  </head>
  <body>
  <div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">BIENVENIDOS </h3>

              <!-- Sign In Form -->
              <form action="http://localhost/proyectoFinalMetodosNumericos/?contr=loginController&func=Ingresar" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="usuarioLogin" id="usuario" >
                  <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="passwordLogin" id="password"">
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"  type="submit">INGRESAR!</button>
                </div>

                 <div class="d-grid">
                  <div class="text-center">
                  </div>
                </div>
              </form>
            <form action="http://localhost/proyectoFinalMetodosNumericos/?contr=registroController&func=Cargar_Pagina_Registro" method="post">
             <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">No tienes usuario? REGISTRATE AQUI!</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>