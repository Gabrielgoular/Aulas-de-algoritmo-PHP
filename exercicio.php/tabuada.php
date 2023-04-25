 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabuada!</title>

</head>
<body>
	<?php
	$v = isset($_GET["esc"])?$_GET["esc"]:0;
		echo "<H1>TABUADA: Nº$v</H1>";
	$c= $v;
	$tab = 1;
	do{
	$so = $c * $tab;	
	echo "$c X $tab = $so</br>";
		$tab ++;
	}while ($tab<=10); 
	
	?>
	<a href="Tabuada.html">Voltar</a>	
</body>
</html> 