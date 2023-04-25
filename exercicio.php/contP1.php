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
		$ic = isset($_GET["ini"])?$_GET["ini"]:0;
		$fi = isset($_GET["fin"])?$_GET["fin"]:0;
		$in = isset($_GET["cre"])?$_GET["cre"]:1;
		if ($ic>=$fi) {
			while ($ic>=$fi ) {
			echo"$ic ";
			$ic -=$in; 
		}
		}
		else{
			while ($ic<=$fi ) {
			echo"$ic ";
			$ic +=$in; 
		}
		}
		?>
	
</br>
	<a href="contP.html" class="botao">Voltar</a>
		
</body>
</html>