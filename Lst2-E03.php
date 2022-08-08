<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 2 - Exercício 3</title>
		<meta charset="utf-8" />
	</head>
	<?php
		echo "<h3>Exercício 3</h3>";
		echo "<h4>Matriz multidimencional de usuários</h4>";
		$usuarios[1]["nome"] = "Gerson";
		$usuarios[1]["email"] = "ge@goo.com";
		$usuarios[1]["senha"] = "123456";
		$usuarios[2]["nome"] = "Pedro";
		$usuarios[2]["email"] = "pedr@hm.com";
		$usuarios[2]["senha"] =	"75324";
		$usuarios[3]["nome"] = "Manuel";
		$usuarios[3]["email"] = "manu@goo.com";
		$usuarios[3]["senha"] =	"98765";	
		$usuarios[4]["nome"] = "Madalena";
		$usuarios[4]["email"] = "mada@b.com";
		$usuarios[4]["senha"] = "95126";
		$usuarios[5]["nome"] = "Joana";
		$usuarios[5]["email"] = "jojo@goo.com";
		$usuarios[5]["senha"] = "35742";
		echo "Imprimindo todo array:<br>";
		print_r ($usuarios);
		echo "<p><p>";
		$selec = 3;
		echo "Usuário $selec:<br>";
		echo "Nome: ".$usuarios[$selec]["nome"]."<br>";
		echo "E-mail: ".$usuarios[$selec]["email"]."<br>";
		echo "Senha: ".$usuarios[$selec]["senha"]."<br>";
	?>
</html>
	