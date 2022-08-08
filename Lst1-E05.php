<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 1 - Exercício 5</title>
		<meta charset="utf-8" />
	</head>
	<?php
		
		echo "<h3>Exercício 5</h3>";
		echo "<h4>Calcula a qtd horas, minutos e segundos</h4>";
		
		$tempo = 13587;
		
		$aux = $tempo % 3600;
		$hora = ($tempo - $aux)/3600;
		$segundo = $aux % 60;
		$minuto = ($aux - $segundo)/60;
		
		echo "<br>O periodo de $tempo segundos, corresponde a:";
		echo "<br>$hora hora(s),";
		echo "<br>$minuto minuto(s) e";
		echo "<br>$segundo segundo(s)";
	?>
</html>