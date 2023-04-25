<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chaves Associativas!</title>

</head>
<body>
	<pre>
	<?php
		 $v= array("Nome"=>"Ana",
				   "Idade"=>23,
		           "Peso"=>78.5);
			//para mostrar na tela usando o print_r ja esta bom mas vamos usar o foreach =print_r($v);
		 foreach ($v as $key => $value) {
		 	echo "O campo $key possui o conteudo $value</br>";
		 }
	?>
	</pre>	
</body>