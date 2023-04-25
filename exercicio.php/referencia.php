<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usando variaves por referencia!</title>

</head>
<body>
	<?php  
	//Variaveis sem referencia
		$a = 3;
		$b = $a;
		$b += 5 ;
		echo "</br>--------Sem-referencia------------";
		echo "</br>A variavel (A) vale $a";
		echo "</br>A variavel (B) vale $b";
	//variaves com referencia
		$a = 3;
		$b = &$a;//note que aqui tem (& comercial)
		$b += 5 ;
		echo "</br>----------referencia--------------";
		echo "</br>A variavel (A) vale $a";
		echo "</br>A variavel (B) vale $b";
		

	?>
		
</body>
</html>