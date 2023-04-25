<!DOCTYPE html>
<html>
<header>
	<meta charset="utf-8">
	<title>Aula inicial opreção aritimetica!</title>

</header>
<body>
	<?php  
	 $t1 = $_GET["a"];
	 $t2 = $_GET["b"];
	 $n1 = 3;
	 $n2 = 2;
	 $m = ($n1 + $n2)/2 ;
	echo  "O valor  $t1 e  $t2 ";
	echo   "</br>A soma de  $n1 e  $n2 é = ". ( $n1 + $n2);
	echo   "</br>A subitração de  $n1 e  $n2 é = ". ( $n1 - $n2);
	echo   "</br>A multiplicação de  $n1 e  $n2 é = ". ( $n1 * $n2);
	echo   "</br>A divisão de  $n1 e  $n2 é = ". ( $n1 / $n2);
	echo   "</br>O resto de  $n1 e  $n2 é = ". ( $n1 % $n2);
	echo "</br>A media de $n1 e $n2 é = $m";
	?>
		
</body>
</html>