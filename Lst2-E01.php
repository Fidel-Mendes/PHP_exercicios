<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 2 - Exercício 1</title>
		<meta charset="utf-8" />
	</head>
	<?php
		echo "<h3>Exercício 1</h3>";
		echo "<h4>Matriz unidimencional de cidades</h4>";
		$finMatr = 0; 
		$cidades = array ("Barueri","Carapicuíba","Osasco","Cajamar","Stna de Parnaíba");
		echo "A cidade na posição 3 é: $cidades[3]";
		$cidades[] = "Pirapora";
		$cidades[] = "Mairiporã";
		$cidades[] = "Caieira";
		$cidades[] = "F. Morato";
		$cidades[] = "Jundiaí";
		echo "<br><br>Dígito final da minha matrícula: $finMatr<br>";
		echo "A cidade na posição $finMatr é: $cidades[$finMatr]";
		
		echo "<br><br><br><br>";
		print "A cidade na posição $finMatr é: $cidades[$finMatr]";
	?>
</html>
	