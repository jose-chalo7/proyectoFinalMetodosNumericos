<?php
	function newton($x){
		$r= $x - ((cos($x * (3.14/180)) - pow($x,3)) / (-sin($x * (3.14/180)) - 3 * pow($x,2)));
		return $r;
	}

	function gauss($a,$b){
		$r = (-1 * $b) / $a;
		return $r;
	}

	
	function fx0($a){
		$r = (5 * $a + cos($a) - exp($a));
		return $r;
	}
	
	function fx1($b){
		$r = (5 * $b + cos($b) - exp($b));
		return $r;
	}

	 function secante($x){
        return  $x*$x*$x + 2.0*$x*$x + 10.0*$x -20;
     }

	define('ITERACIONES_MAXIMAS', '100');
    define('TOLERANCIA', '0.0');



// Para encontrar valor de la funcion, f(x) Por metodo de muller
 
$MAX_ITERATIONS = 10000;
 
// Funcion a calcular f(x)
function funcion($x)
{
    // usando f(x) = x ^ 3 + 2x ^ 2 + 10x - 20
    return 1*pow($x, 3) + 2*$x*$x + 10*$x - 20;
}
 
function Muller($a, $b, $c)
{
    global $MAX_ITERATIONS;
    $res=0;
 
    for ($i = 0;;++$i)
    {
       // Calcular varias constantes necesarias
        // para calcular x3
        $f1 = funcion($a);
        $f2 = funcion($b);
        $f3 = funcion($c);
        $d1 = $f1 - $f3;
        $d2 = $f2 - $f3;
        $h1 = $a - $c;
        $h2 = $b - $c;
        $a0 = $f3;
        $a1 = ((($d2*pow($h1, 2)) - ($d1*pow($h2, 2)))
                    / (($h1*$h2) * ($h1-$h2)));
        $a2 = ((($d1*$h2) - ($d2*$h1))/(($h1*$h2) * ($h1-$h2)));
        $x = ((-2*$a0) / ($a1 + abs(sqrt($a1*$a1-4*$a0*$a2))));
        $y = ((-2*$a0) / ($a1-abs(sqrt($a1*$a1-4*$a0*$a2))));
 
        // Tomando la raíz más cercana a x2
        if ($x >= $y)
            $res = $x + $c;
        else
            $res = $y + $c;
 
        // comprobando la semejanza de x3 con x2 hasta
        // dos decimales
        $m = $res*100;
        $n = $c*100;
        $m = floor($m);
        $n = floor($n);
        if ($m == $n)
            break;
        $a = $b;
        $b = $c;
        $c = $res;
        if ($i > $MAX_ITERATIONS)
        {
            echo"La raiz no se puede encontrar utilizando el método de Muller";
            break;
        }
    }
    if ($i <= $MAX_ITERATIONS)
        echo "El valor de la raiz es = ".round($res,4);
}

?>

