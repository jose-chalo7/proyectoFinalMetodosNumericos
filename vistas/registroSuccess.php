<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="../public/css/success.css">

    <title>Usuario Registrado!</title>
  </head>
  <body>
   <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Usuario Registrado Exitosamente!</h1> 
        <p>El usuario ha sido agregado al sistema.</p><br>
         <form action="http://localhost/proyectoFinalMetodosNumericos/?contr=loginController&func=Cargar_Pagina_Login" method="post">
             <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Igresar!</button>
                </div>

              </form>
      </div>


  </body>
</html>