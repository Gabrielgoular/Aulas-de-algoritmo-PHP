<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ano anterior do atual!</title>

</head>
<body>
	<?php  
		$ano = isset($_GET["ano"])?$_GET["ano"]:1900;
		$idade = date("Y")-$ano;
		echo "Você naceuem $ano e tem $idade de idade";
		if($idade>=18){
			$v = "Ja pode votar";
			$d = "Ja pode dirigir";
		}
		else{
			$v = "Não pode votar";
			$d = "Não pode dirigir";
		}
	
		echo "</br>Com essa idade você $v e tambem $d";
	?>
</br>
		<a href="votardirigir2.html">Voltar</a>
</body>
</html>