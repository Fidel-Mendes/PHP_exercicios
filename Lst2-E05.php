<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 2 - Exercício 5</title>
		<meta charset="utf-8" />
	</head>
	<?php
		echo "<h3>Exercício 5</h3>";
		echo "<h4>Matriz multidimencional de veículos</h4>";
		$carros["VW"][1] = "Gol";
		$carros["VW"][2] = "Up";
		$carros["VW"][3] = "Jetta";
		$carros["VW"][4] = "Fusca";
		$carros["GM"][1] = "Corsa";
		$carros["GM"][2] = "Celta";
		$carros["GM"][3] = "Cruize";
		$carros["GM"][4] = "Chevette";
		$carros["Fiat"][1] = "Uno";
		$carros["Fiat"][2] = "Mobby";
		$carros["Fiat"][3] = "Siena";
		$carros["Fiat"][4] = "147";
		$carros["Ford"][1] = "Fiesta";
		$carros["Ford"][2] = "Ka";
		$carros["Ford"][3] = "Fusion";
		$carros["Ford"][4] = "Corcel";
		
		$selecMarca = "VW";
		$selecPosic = 4;
		echo "Exibindo o carro posição $selecPosic da $selecMarca: ";
		echo $carros[$selecMarca][$selecPosic]."<br><br>";
		$selecMarca = "Fiat";
		$selecPosic = 1;
		echo "Exibindo o carro posição $selecPosic da $selecMarca: ";
		echo $carros[$selecMarca][$selecPosic]."<br><br>";;		
		$selecMarca = "GM";
		$selecPosic = 2;
		echo "Exibindo o carro posição $selecPosic da $selecMarca: ";
		echo $carros[$selecMarca][$selecPosic]."<br><br>";;		
	?>
</html>
	