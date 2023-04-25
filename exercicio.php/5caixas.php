<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>5 caixas de entrada!</title>

</head>
<body>
	<form method="get" action="5caixas2.php">
		<?php
		 $c= 1;
		 while ($c<=5) {
		echo "Valor$c:<input type='number' name='v$c' max='100' min='0' value='0'/></br>";
		$c++;
			}
		?>
		<input type="submit" value="Enviar" class="botao">
	</form>
		
</body>
</html> 