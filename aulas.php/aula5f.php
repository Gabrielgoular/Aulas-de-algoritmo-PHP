<!DOCTYPE html>
<html>
<header>
	<meta charset="utf-8">
	<title>Função aritmeticas!</title>

</header>
<body>
	<?php 
	$n1 = $_GET["x"];
	$n2 = $_GET["y"];

	echo "<h1>Valores recebidos $n1 e $n2</h1>" ;
	echo "</br>O valor absoluto de $n2 é ".abs($n2);
	echo "</br>O valor de $n1<sup> e $n2</sup> é".pow($n1,$n2);
	echo "</br>A raiz quadrada de $n1 é ". sqrt($n1);
	echo "</br>O valor de $n1 arrendondado é ".round($n1);
	echo "</br>A parte inteira de $n1 é ". intval($n1);
	echo "</br>O valor de $n1 em moeda é R$".number_format($n1,2);
	?>
		
</body>
</html>