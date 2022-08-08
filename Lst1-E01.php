<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 1 - Exercício 1</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="" method="GET">
			<span>Valor em milímetros</span><input type="text" name="valMili" />
			<input type="submit" value="Calcular" />
		</form>
		<?php
			
			echo "<h3 class='titulo'>Exercício 1</h3>";
			echo "<h4>Conversão milímetro para polegada</h4>";
			
			if(isset($_GET['valMili']))
				$milimetro = $_GET['valMili'];
			else
				$milimetro = "";
			$pol = $milimetro / 25.4;
			
			echo "$milimetro milímetros<br>";
			echo 'equivale a '.round($pol,2).' polegadas';
		?>
</html>