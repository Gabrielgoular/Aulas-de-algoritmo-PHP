<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>selct estados Br!</title>
	<style>
		h4{
			color:#80a2ff;
		}
	</style>

</head>
<body>
	<?php
		$et =isset($_GET["est"])?$_GET["est"]:"AC";
		switch ($et) {
			case 'AC':
			case 'AP':
			case 'AM':
			case 'PA':
			case 'RO':
			case 'RR':
			case 'TO':
				echo "$et, Este estado fica localizado na região"."<h4>Norte</h4>";
				break;
			case 'AL':
			case 'BA':
			case 'CE':
			case 'MA':
			case 'PI':
			case 'PE':
			case 'PB':
			case 'RN':
			case 'SE':
				echo "$et, Este estado fica localizado na região<h4> Nordeste</h4>";
				break;
			case 'RS':
			case 'PR':
			case 'SC':
				echo "$et, Este estado fica localizado na região <h4>Sul</h4> ";
				break;
			case 'DF':
			case 'GO':
			case 'MT':
			case 'MS':
				echo "$et, Este estado fica localizado na região <h4>Centro oeste</h4>";
				break;
			case 'ES':
			case 'MG':
			case 'RJ':
			case 'SP':
				echo "$et, Este estado fica localizado na região<h4> Suldeste</h4>";
				break;
			default:
				echo "Informe o estado corretamente!";
				break;
		}
	
	?>
	<br></br>
	<a href="select.html" class="botao">Voltar </a>
		
</body>
</html>