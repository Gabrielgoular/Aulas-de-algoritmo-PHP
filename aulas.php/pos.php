<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strpos!</title>

</head>
<body>
	
	<?php
	//deixa a posição de uma frase, palavra etcdeixa a posição de uma frase, palavra etc,
		 $frase="Estou aprendendo PHP";
		 $pos=strpos($frase,"PHP");
		 echo "$frase</br> A string foi encontrada na posição = $pos";
		 echo "<p></p>";
	//deixa a posição de uma frase, palavra etc, porem não precisa colocar a frase maiuscula ou minuscula o i iguinora isso, assim achando a posição
		$fras = "Oi esta tudo bem";
		$res= stripos($fras,"BEM");
		echo "$fras</br> A string foi encontrada na posição = $res";	 
	?>
		
</body>