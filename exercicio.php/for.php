 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usando For</title>

</head>
<body>
	<?php
		echo"Progresiva= ";
		for ($i=1; $i <=10 ; $i++) { 
			
			echo"$i: ";
		}
		echo"<br>+++++++++++++++++++++++++++</br>";
		echo"Regresiva= ";
		for ($i=10; $i>=1 ; $i--) { 
			echo "$i: ";
		}
		echo"<br>+++++++++++++++++++++++++++</br>";
		echo"0 ate 100 pulando em 5= ";
		for ($i=0; $i <=100 ; $i+=5) { 
			echo "$i: ";
		}
		echo"<br>+++++++++++++++++++++++++++</br>";
		echo"20 ate 0 tirando 2= ";
		for ($i=20; $i>=0 ; $i-=2) { 
			echo "$i: ";
		}
	?>
		
</body>
</html> 