<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ano anterior do atual!</title>

</head>
<body>
	<?php  
		$atual = $_GET["aa"];
		echo "Ano atual é: $atual e o ano anterior é ". --$atual;
	?>
		
</body>
</html>