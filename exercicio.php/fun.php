<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Função!</title>

</head>
<body>
	<?php 
	function  soma ($a, $b){
		$s = $a + $b;
		echo "<p> A soma vale: $s</p>";
	} 
	soma(3,4);
	soma(10,10);
	$x= 9;
	$y= 21;
	soma($x, $y);
	?>
	
		
</body>
</html>