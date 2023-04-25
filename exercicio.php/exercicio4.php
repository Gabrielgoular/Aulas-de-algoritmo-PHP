<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ano anterior do atual!</title>

</head>
<body>
	<?php  
		$nota1 = isset($_GET["n1"])?$_GET["n1"]:"Nota não informada";
		$nota2 = isset($_GET["n2"])?$_GET["n2"]:"Nota não informada";
		$m = ($nota1 + $nota2) /2;
		echo "A sua media é de: $m";
		if($m<= 5){
		 $rep ="reprovado";
		}
		elseif(($m>= 5.5 && $m<=6.9)){
		 $rep =  "em recuperação ";	
		}
		else{
			$rep = "aprovado ";
		}
		echo "</br>Você esta $rep";

	?>
</br>
		<a href="media4.html">Voltar</a>
</body>
</html> 