<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Função return!</title>

</head>
<body>
	<?php 
	function soma($a,$b){
		$s = $a + $b;
		return$s;
	}
	$x = 3;
	$y = 4;
	$r= soma($x, $y);
	echo "A soma entre x e y = $r";
	?>
	
		
</body>
</html>