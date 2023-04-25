<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Procedimento por referencia!</title>

</head>
<body>
	<?php
	echo "<h1>Precedimento por valor </h1>";
	function teste($x ){
		$x +=2;
		echo "<p>O valor de X é=$x</p>"; 
	}
		$a = 3;
		teste($a);
		echo "<p>O valor de a é= $a</p>";
		echo "<br>+++++++++++++++++++++++++++++++++</br>";
		echo "<h1>Procedimento por referência</h1>";

		function test(&$x){
			$x +=2;
			echo"<p>O valor de X é=$x</p>"; 
		}
		$a= 3;
		test($a);
		echo "<p>O valor de a é=$a</p>";
		?>
		
</body>
</html>