<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Desconto no produto!</title>

</head>
<body>
	<?php  
		$preco = $_GET["p"];
		echo "</br>O preço do produto é R$ $preco";
		$preco = $preco + ($preco*10/100);
		echo "</br>O novo preço com 10% de aumento é R$ $preco";
	?>
		
</body>
</html>