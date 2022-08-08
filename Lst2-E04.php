<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 2 - Exercício 4</title>
		<meta charset="utf-8" />
	</head>
	<?php
		echo "<h3>Exercício 4</h3>";
		echo "<h4>Matriz multidimencional de alunos e notas</h4>";
		$alunos[1]["nome"] = "Zezinho";
		$alunos[1]["nota"] = 5;
		$alunos[2]["nome"] = "Huguinho";
		$alunos[2]["nota"] = 8.5;
		$alunos[3]["nome"] = "Luizinho";
		$alunos[3]["nota"] = 3.5;
		$alunos[4]["nome"] = "Joãozinho";
		$alunos[4]["nota"] = 10;
		$alunos[5]["nome"] = "Pedrinho";
		$alunos[5]["nota"] = 9;
		echo "Exibindo todo array:<br>";
		print_r ($alunos)
		?>
</html>
	