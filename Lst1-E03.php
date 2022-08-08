<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 1 - Exercício 3</title>
		<meta charset="utf-8" />
	</head>
	<?php
		
		echo "<h3>Exercício 3</h3>";
		echo "<h4>Efetuar as 4 operações aritiméticas</h4>";
	
		$val1 = 10;
		$val2 = 3;
		
		$soma = $val1 + $val2;
		$diferenca = $val1 - $val2;
		$produto = $val1 * $val2;
		$quociente = $val1 / $val2;
		
		echo "Soma de ".$val1." e ".$val2." é igual a $soma<br>";
		echo "Subtração de $val1 e $val2 é igual a $diferenca<br>";
		echo "Multiplicação de $val1 e $val2 é igual a $produto<br>";
		echo "Divisão de $val1 e $val2 é igual a $quociente<br>";
	?>
</html>