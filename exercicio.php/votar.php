<!DOCTYPE html>
<html>
<header>
	<meta charset="utf-8">
	<title>Eleitor votar!</title>

</header>
<body>
	<?php 
		$ano = $_GET["an"];
		$idade = 2022 - $ano;
		echo "Quem naceu em $ano tem $idade anos de idade</br>";
		$tipo = ($idade >= 18 and $idade <=64)? "E obrigatorio": "Nao é obrigatorio";
		echo "E dessa forma seu voto $tipo "; 
		 
	?>
		
</body>
</html>