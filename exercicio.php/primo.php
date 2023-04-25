<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nº Primo!</title>

</head>
<body>
	//ainda não descobri
	<?php
	$n = isset($_GET["num"])?$_GET["num"]:0;echo "Analizando o Nº $n</br>";
	$contn = 0;
	$cont = 0;
	for ($i=$n; $i <=$n ; $i++) {
	if ($i%$n==0 ) {
		$contn ++;
		echo "$contn";
	}
}
	?>
</br>
	<a href="primo.html">Voltar</a>
</body>
</html>