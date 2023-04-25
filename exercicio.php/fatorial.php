<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Contador personalizado!</title>
	<style>
		span.texto{
			font-size: <?php echo $tam;?>;
			color: <?php echo $cor; ?>;
		}
		
	</style>


</head>
<body>
	<?php
		$v =isset($_GET["val"])?$_GET["val"]:0;
		 echo "<h1>Calcular o fatorial de $v</h1>";
		 $c = $v;
		 $fat = 1;
		 	do{
		 		$fat = $fat * $c;
		 		$c --;
		 	}while ($c>=1);

		 	echo "<h2>$v ! =$fat</h2>";
		?>
		<a href="fatorial.html">Voltar</a>
</body>
</html>