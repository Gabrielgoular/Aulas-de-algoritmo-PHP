<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Leitor pessoa!</title>

</head>
<body>
	<?php
		$d = isset($_GET["ds"])?$_GET["ds"]:0;
		switch ($d) {
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "Levanta e vai estudar";
				break;
			case 7:
			case 8:
				echo "Bom descanso ";
			break;
			default:
				echo"Dia da semana invalidado!";

		}
	
	?>
	<br></br>
	<a href="javascript:history.go(-1)" class="botao">Voltar </a>
		
</body>
</html>