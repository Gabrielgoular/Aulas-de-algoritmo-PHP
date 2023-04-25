<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Leitor pessoa!</title>

</head>
<body>
	<?php
		$nome =isset( $_GET["nome"])?$_GET["nome"]:"[não informado]"; 
		$ano =isset( $_GET["ano"])?$_GET["ano"]:"[não informado]";
		$sexo =isset( $_GET["sexo"])?$_GET["sexo"]:"[não informado]";
		$idade = date("Y") - $ano;
		echo"<h1>$nome é $sexo tem $idade anos.</h1>"; 
	
	?>
	<br></br>
		<a href="modelohtml1.html">Voltar</a>
</body>
</html>