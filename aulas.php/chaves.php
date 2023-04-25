<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chaves personalizadas!</title>

</head>
<body>
	<pre>
	<?php
	//aqui estão criando indice com valores, 1,3,6,8 não de 1 ate 8 são 4 linhas mas com os devidos indices 
		 $v= array(1=>"A",3=>"B",6=>"C",8=>"D");
	//aqui estou criando uma linha nova
		$v []="E"; 
	//aqui estou tirando uma linha, so tirar da frente (//) que cod funciona
		//unset($v[9]);

		 print_r($v);
	?>
	</pre>	
</body>