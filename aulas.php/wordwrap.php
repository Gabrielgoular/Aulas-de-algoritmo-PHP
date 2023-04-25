 <!DOCTYPE html>
<html>
<header>
	<meta charset="utf-8">
	<title>Wordwrap quebra de linha!</title>

</header>
<body>
	<?php  
		$t = "Aqui tem uma texto gigante de php";
		$r = wordwrap($t, 20, "</br>\n");
		echo "$r";
	?>
		
</body>
</html>