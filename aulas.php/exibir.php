<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exibir vetor!</title>

</head>
<body>
	
	<?php
		 //mostrar o conteudo de um vetor(array)
		$n= array("A","B","C","D");
		print_r($n);
		//mostra o conteudo de um vetor,  o tippo primitivo do valor e o tamanho
		$v=array("A","B","C");
		var_dump($v);
		//para contar somente o tamanho do array 
		$r=array(1,2,3);
		echo count($r);
		echo"</p>";
		//adiciona na ultima possição um valor 
		$b=array(1,2,3,4,5);
		array_push($b,6 );
		print_r($b);
		echo"</p>";
		//exclui o ultimo valor de um vetor
		$c=array(1,2,3,4,5);
		array_pop($c);
		print_r($c);
		echo"</p>";
		//adiciona um valor no inicio do vetor 
		$t=array(1,2,3,4,5);
		array_unshift($t,6 );
		print_r($t);
		echo"</p>";
		//exclui o primeiro valor de um vetor
		$s=array(1,2,3,4,5);
		array_shift($s);
		print_r($s);
		echo "</p>";
		//coloca os valores de um vetor em ordem cresente
		$a=array(2,1,5,3,4);
		sort($a);
		print_r($a);
		echo "</p>";
		//coloca os valores de vetor em ordem decresente
		$j=array(1,2,3,4,5);
		rsort($j);
		print_r($j);
		echo "</p>";
		//coloca os valore em orde cresente mas o indices permanencem os mesmos
		$p=array(2,1,5,3,4);
		asort($p);
		print_r($p);
		echo "</p>";
		//deixa os valores do vetor em ordem decresente, mas mantem os indices
		$m=array(2,1,5,3,4);
		arsort($m);
		print_r($m);
		echo "</p>";
		//ele ordena os indices em ordem cresente, mas os valores do vetor se mantem os mesmos
		$n=array(2=>"a",3=>"h",0=>"g",1=>"b");
		ksort($n);
		print_r($n);
		echo "</p>";
		//ordena os indices em ordem decresente, deixando os valores de cada sendo os mesmos
		$e=array(2=>"a",3=>"h",0=>"g",1=>"b");
		krsort($e);
		print_r($e);
		echo "</p>";


			 
	?>
		
</body>