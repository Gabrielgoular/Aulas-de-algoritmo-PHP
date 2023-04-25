	<meta charset="utf-8">
	<title>Usando For</title>

</head>
<body>
	<?php
	 $n = isset($_GET["val"])?$_GET["val"]:0;
	 echo"<h1>ATABUADA nº= $n</h1>";
	 for ($i=1; $i<=10 ; $i++) { 
	 	$so = $n * $i;
	 	echo"$n X $i = $so</br>";
	 }
	?>
	<a href="fortabua.html">Voltar</a>
</body>
</html> 