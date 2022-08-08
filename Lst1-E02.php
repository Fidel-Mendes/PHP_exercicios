<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 1 - Exercício 2</title>
		<meta charset="utf-8" />
	</head>
	<?php
		
		echo "<h3>Exercício 2</h3>";
		echo "<h4>Conversão graus Celsius em Fahrenheint</h4>";
	
		$grauC = 25;
		$grauF = (9/5*$grauC)+32;
		
		echo "<br>$grauC graus Celsius<br>";
		echo "equivale a ".round($grauF,2)." graus Fahrenheint";
	?>
</html>