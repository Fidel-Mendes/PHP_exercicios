<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 1 - Exercício 7</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="" method="GET">
			<span>Nota 1: </span><input type="text" name="nota1" /><br/>
			<span>Nota 2: </span><input type="text" name="nota2" /><br/>
			<span>Nota 3: </span><input type="text" name="nota3" /><br/>
			<br/><input id="botao" type="submit" value="Avaliar Aluno" />
		</form>
		<?php
		
			echo "<h3>Exercício 7</h3>";
			echo "<h4>Programa para aprovação de alunos</h4>";
			
			
			$p1 = 7;
			$p2 = 8;
			$p3 = 9;
			
			if (isset ($_GET ['nota1'])) { 
				$n1 = $_GET ['nota1'];
			} else { 
				$n1=''; 
			}
			if (isset ($_GET ['nota2'])) { 
				$n2 = $_GET ['nota2'];
			} else { 
				$n2=''; 
			}
			if (isset ($_GET ['nota3'])) { 
				$n3 = $_GET ['nota3'];
			} else { 
				$n3=''; 
			}
			
			$media = ($n1*$p1 + $n2*$p2 + $n3*$p3) / ($p1+$p2+$p3);
			echo "As notas do aluno são:<br>Nota 1: $n1,<br>Nota 2: $n2, <br>Nota 3: $n3.";
			echo "<br>Sua média final é igual a ".round($media,2);
			if ($media>= 6.0) {
				echo "<br> e esse aluno esta aprovado.";
			} else {
				echo "<br> e esse aluno esta reprovado.";
			}
		?>
		<br/><br/><br/><a href='http://localhost:8080/Lista1/'>Voltar</a>
	</body>
</html>