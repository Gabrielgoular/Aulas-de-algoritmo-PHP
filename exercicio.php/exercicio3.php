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
		if($idade< 16){
			$tipo= "Não vota";
		}
		elseif(($idade>= 16 and $idade<18)|| ($idade>65)){
			$tipo= "Voto opcional"; 
			}
			else{
				$tipo= "Voto obrigatorio";
			}
		
		echo "</br>$tipo";
	?>
</br>
		<a href="votar3.html">Voltar</a>
</body>
</html> 