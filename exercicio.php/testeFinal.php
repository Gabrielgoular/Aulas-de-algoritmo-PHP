  <!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Usando o teste logico no final!</title>
	<style>
		span.texto{
			font-size: <?php echo $tam;?>;
			color: <?php echo $cor; ?>;
		}
		
	</style>


</head>
<body>
	<?php 
		$c = 1;
		do{
			echo "$c- ";
			$c ++;
		}while ($c <= 10);
		echo"</br>=========================</br>";
	
		$t =10;
		do{
			echo "$t- ";
			$t --;
		}while ($t >= 1); 

	
	?>	
</body>
</html>