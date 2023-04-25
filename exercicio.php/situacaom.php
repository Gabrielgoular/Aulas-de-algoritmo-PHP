<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Situação media!</title>

</head>
<body>
	<?php  
		$nota1 = $_GET["n1"];
		$nota2 = $_GET["n2"];
		$m =($nota1 + $nota2)/2;
		echo "A media do aluno é $m</br>";
		$sit = ($m <6)?"REPROVADO":"APROVADO";
		echo "A situação do aluno é $sit";
	?>
		
</body>
</html>