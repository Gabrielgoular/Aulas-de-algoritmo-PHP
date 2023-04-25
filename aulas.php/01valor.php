<!DOCTYPE html>
<html>
<header>
	<meta charset="utf-8">
	<title>Formulario PHP</title>

</header>
<body>
	
	<?php 
		$valor = $_GET["v"];
		$rq = sqrt($valor);
		echo "o valor enviado $valor e a raiz quadrada é igual a :</br> ".number_format($rq,2);
		 
	?>
	<br></br>
	<a href="modelohtml.html">Voltar</a>
		
</body>