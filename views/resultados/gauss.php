<?php session_start();

if (!isset($_SESSION['usuario'])) {
	header("location:../login/login.php");
}
	require("../../controllers/funciones.php");
	if(!empty($_POST)){
		
		$matriz[0][0] = $_POST['x1']; $matriz[0][1] = $_POST['y1']; $matriz[0][2] = $_POST['z1']; $matriz[0][3] = $_POST['t1'];
		$matriz[1][0] = $_POST['x2']; $matriz[1][1] = $_POST['y2']; $matriz[1][2] = $_POST['z2']; $matriz[1][3] = $_POST['t2'];
		$matriz[2][0] = $_POST['x3']; $matriz[2][1] = $_POST['y3']; $matriz[2][2] = $_POST['z3']; $matriz[2][3] = $_POST['t3'];

	}
?>


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
      <img src="../../img/umg.jpg" alt="..." height="60">
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
            <li><a class="dropdown-item" href="../metodos/metodoNewtonPrincipal.php">Metodo Newton Raphson</a></li>
            <li><a class="dropdown-item" href="../metodos/secante.php">Metodo Secante</a></li>
            <li><a class="dropdown-item" href="#">Metodo Muller</a></li>
            <li><a class="dropdown-item" href="../metodos/gaussPrincipal.php">Metodo Gauss</a></li>
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
  <h1 class="mt-4">Metodo de Gauss</h1>
  <p>Se conoce como forma matricial en la cual se escriben los coeficientes sin las incognitas separados por una linea vertical en donde se toma el primer coeficiente de la ecuación número uno, y se le busca un número que multiplicado y luego sumado o restado con el primer coeficiente de la segunda ecuación sea igual a cero.</p><br>
      <h1 class="mt-4">RESULTADO:</h1>

</div>

<div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-3
">
          <div class="text-center">
          <center><table>
                        	<tr align="center">
                            <td colspan="2">                            
                            	<?php
									# MOSTRANDO EL SISTEMA DE ECUACION
									for($i=0; $i < 3; $i++){
										if($i <=0){echo $matriz[0][0]."X ";} if($i >0 and $i <=1){echo $matriz[1][0]."X ";} if($i >=2){ echo $matriz[2][0]."X ";}		
										if($matriz[$i][1] >= 0){echo " + ".$matriz[$i][1]."Y ";}else{echo " ".$matriz[$i][1]."Y ";}	
										if($matriz[$i][2] >= 0){echo " + ".$matriz[$i][2]."Z"; echo " = ".$matriz[$i][3];}else{echo " ".$matriz[$i][2]."Z"; echo " = ".$matriz[$i][3];}
										echo"<br />";
									}

								?>
                             </td></tr>
                            <tr><td colspan="3">
								<?php
								
										# MOSTRANDO LAS ECUACIONES EN LA MATRIZ			
										echo "<center><table width='200' border='1'>";
										for($i = 0; $i < 3; $i++){
											echo "<tr>";
											for($j = 0; $j < 4; $j++){
												echo "<td width='10'>".$matriz[$i][$j]."</td>";
											}	echo "</tr>";
										}echo "</table></center>";
                  						
										# DESPEJANDO PARA HALLAR A ?
										$e2 = gauss($matriz[0][0],$matriz[1][0]);
										$e3 = gauss($matriz[0][0],$matriz[2][0]);
										
										# GENERANDO NUEVAS ECUACIONES DE 2 Y 3 MULTIPLICADO EL VALOR DEL DESPEJE CON LA ECUACION (1,1) Y SUMANDO CON ECUACION (2,3)
										for($j = 0; $j < 4; $j++){

													$matriz[1][$j] = ($e2 * $matriz[0][$j]) + $matriz[1][$j];
					
													$matriz[2][$j] = ($e3 * $matriz[0][$j]) + $matriz[2][$j];
										}
										
										# DESPEJANDO PARA HALLAR A?
										$e3 = gauss($matriz[1][1],$matriz[2][1]);
										
										# GENERANDO NUEVA ECUACION 3
										for($j = 0; $j < 4; $j++){
					
												$matriz[2][$j] = ($e3 * $matriz[1][$j]) + $matriz[2][$j];
										}
								?>
                                </td>
                                </tr>
                             <tr>
                             <td colspan="3">
                                	<?php	
										# MOSTRANDO NUEVA MATRIZ GENERADA											
										echo "<center><table width='200' border='1'>";
										for($i = 0; $i < 3; $i++){
											echo "<tr>";
											for($j = 0; $j < 4; $j++){
												echo "<td width='10'>".$matriz[$i][$j]."</td>";
											}	echo "</tr>";
										}echo "</table></center>";
										# HALLANDO Z, Y, X
										$z = $matriz[2][2] / $matriz[2][3];
										$y = ($matriz[1][3] + (-1 * ($matriz[1][2] * $z))) / $matriz[1][1];
										$x = ($matriz[0][3] + (-1 * ($matriz[0][2] * $z)) + (-1 * ($matriz[0][1] * $y))) / $matriz[0][0];
									?>
                              </td>
                              </tr>
                 				
                                <tr>
                                <td colspan="3">
                                	<?php
										# MOSTRANDO RESULTADOS
										echo"<center><table>";
										echo "<tr><td><b>Z</b> = ".$z."</td></tr>";
										echo "<tr><td><b>Y</b> = ".$y."</td></tr>";
										echo "<tr><td><b>X</b> = ".$x."</td></tr>";
										echo"</table><b></center>";
									?>
                                 </td>
                                 </tr>
                          </table></center>

          
         
                 

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