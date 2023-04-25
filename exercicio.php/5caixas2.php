<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>5 caixas!</title>

</head>
<body>
	<?php  
	 $i= 1;
	 while ($i <=5) {
	 	$v = "num".$i;
	 	$url= "v".$i;
	 	$$v = isset($_GET["$url"])?$_GET["$url"]:"informe o nº";
	 	$i++;
	 	}	
	 	$i = 1;
	 	while ($i <=5) {
	 		$v = "num".$i;
	 		echo "Valor $i : ".$$v."</br>";
	 		$i ++;
	 	}
	?>
	<a href="5caixas .php" class="botao">Voltar</a>
		
</body>
</html>