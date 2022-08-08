<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 2 - Exercício 2</title>
		<meta charset="utf-8" />
	</head>
	<?php
		echo "<h3>Exercício 2</h3>";
		echo "<h4>Matriz unidimencional de três países</h4>";
		$paises["BRA"] = "Brasil";
		$paises["ING"] = "Inglaterra";
		$paises["EUA"] = "Estados Unidos";
		echo "Todo o array:<br>";
		print_r ($paises);
		echo "<p><p><p>";
		$selPais = "ING";
		echo $paises[$selPais]; 
	?>
</html>
	