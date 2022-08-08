<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 1 - Exercício 4</title>
		<meta charset="utf-8" />
	</head>
	<?php
		
		echo "<h3>Exercício 4</h3>";
		echo "<h4>Cálculo do Perímetro e Área de um retângulo</h4>";
	
		$lado1 = 5;
		$lado2 = 35;
		
		$perimetro = 2*$lado1 + 2*$lado2;
		$area = $lado1 * $lado2;
		
		echo "Um retângulo medindo $lado1 por $lado2<br>";
		echo "Possui um perímetro de $perimetro m ";
		echo "e uma Área de $area m<sup>2</sup>";
	?>
</html>