<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 1 - Exercício 6</title>
		<meta charset="utf-8" />
	</head>
	<?php
		
		echo "<h3>Exercício 6</h3>";
		echo "<h4>Calculadora de Divisão para 2 numeros</h4>";
		
		$dividendo = 33;
		$divisor = 7;
		
		$resto = $dividendo % $divisor;
		$quociente = ($dividendo-$resto)/$divisor;
		
		echo "Dividendo = $dividendo<br>";
		echo "Divisor = $divisor<br>";
		echo "Quociente = $quociente<br>";
		echo "Resto = $resto<br>";
	?>
</html>