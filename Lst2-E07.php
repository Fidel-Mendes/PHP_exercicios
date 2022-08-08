<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 2 - Exercício 7</title>
		<meta charset="utf-8" />
	</head>
	<?php
		echo "<h3>Exercício 7</h3>";
		echo "<h4>Matriz multidimencional de alunos, notas e médias</h4>";
	
		$idAluno = 1;
		$alunos[$idAluno]["nome"] = "Zezinho";
		$alunos[$idAluno]["n1"] = 5;
		$alunos[$idAluno]["n2"] = 8;
		$alunos[$idAluno]["media"] = round(($alunos[$idAluno]["n1"]+2*$alunos[$idAluno]["n2"])/3,2);
		
		$idAluno = 2;		
		$alunos[$idAluno]["nome"] = "Huguinho";
		$alunos[$idAluno]["n1"] = 8;
		$alunos[$idAluno]["n2"] = 8;
		$alunos[$idAluno]["media"] = round(($alunos[$idAluno]["n1"]+2*$alunos[$idAluno]["n2"])/3,2);		
		
		$idAluno = 3;
		$alunos[$idAluno]["nome"] = "Luisinho";
		$alunos[$idAluno]["n1"] = 3;
		$alunos[$idAluno]["n2"] = 4;
		$alunos[$idAluno]["media"] = round(($alunos[$idAluno]["n1"]+2*$alunos[$idAluno]["n2"])/3,2);				
	
		$idAluno = 4;
		$alunos[$idAluno]["nome"] = "Gastão";
		$alunos[$idAluno]["n1"] = 10;
		$alunos[$idAluno]["n2"] = 9;
		$alunos[$idAluno]["media"] = round(($alunos[$idAluno]["n1"]+2*$alunos[$idAluno]["n2"])/3,2);		
	
		$idAluno = 5;
		$alunos[$idAluno]["nome"] = "Peninha";
		$alunos[$idAluno]["n1"] = 8;
		$alunos[$idAluno]["n2"] = 7;
		$alunos[$idAluno]["media"] = round(($alunos[$idAluno]["n1"]+2*$alunos[$idAluno]["n2"])/3,2);		
	
		echo "Exibindo os dados linha a linha:<br>";
		$idAluno = 1;
		echo "Nome: ".$alunos[$idAluno]["nome"]."<br>";
		echo "nota1: ".$alunos[$idAluno]["n1"]."<br>";
		echo "nota2: ".$alunos[$idAluno]["n2"]."<br>";
		echo "Media final: ".$alunos[$idAluno]["media"]."<br>";
		echo "<br>";
		$idAluno = 2;
		echo "Nome: ".$alunos[$idAluno]["nome"]."<br>";
		echo "nota1: ".$alunos[$idAluno]["n1"]."<br>";
		echo "nota2: ".$alunos[$idAluno]["n2"]."<br>";
		echo "Media final: ".$alunos[$idAluno]["media"]."<br>";
		echo "<br>";
		$idAluno = 3;
		echo "Nome: ".$alunos[$idAluno]["nome"]."<br>";
		echo "nota1: ".$alunos[$idAluno]["n1"]."<br>";
		echo "nota2: ".$alunos[$idAluno]["n2"]."<br>";
		echo "Media final: ".$alunos[$idAluno]["media"]."<br>";
		echo "<br>";
		$idAluno = 4;
		echo "Nome: ".$alunos[$idAluno]["nome"]."<br>";
		echo "nota1: ".$alunos[$idAluno]["n1"]."<br>";
		echo "nota2: ".$alunos[$idAluno]["n2"]."<br>";
		echo "Media final: ".$alunos[$idAluno]["media"]."<br>";
		echo "<br>";
		$idAluno = 5;
		echo "Nome: ".$alunos[$idAluno]["nome"]."<br>";
		echo "nota1: ".$alunos[$idAluno]["n1"]."<br>";
		echo "nota2: ".$alunos[$idAluno]["n2"]."<br>";
		echo "Media final: ".$alunos[$idAluno]["media"]."<br>";
		echo "<br>";
		?>
</html>
	