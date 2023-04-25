<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Str_pad</title>

</head>
<body>
	
	<?php
		 $nome="Goularte";
		 $novo=str_pad($nome,13," ", STR_PAD_RIGHT);
		 print("Ola $novo, tudo bem?");
		 
	?>
		
</body>