<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tolower!Toupper!ucfirst!ucwords!strrev!</title>

</head>
<body>
	
	<?php
	//deixa as letras minusculas
		 $nome= "Gustavo guanabara";
		 $nome2=strtolower($nome);
		 echo "Seu nome é $nome2";
		 echo "<p></p>";
	//deixa as letras maiusculas
		 $nome3="Gabriel Goularte";
		 print("Seu nome é ".strtoupper($nome3));
		 echo "<p></p>";
    //deixa somente a primeira letra mauscula
		 $nome4="gabriel goularte";
		 print("Seu nome é ".ucfirst($nome4));
		 echo "<p></p>";
	//deixa todas as inicias de palavras maiusculas
		 $nome5="jonas moura";
		 print("Seu nome e ".ucwords($nome5));
		 echo "<p></p>";
	//deixa a palavra ao contrario
		 $nome6="gabriel";
		 print(strrev($nome6));
	?>
		
</body>