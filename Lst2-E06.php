<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 2 - Exercício 6</title>
		<meta charset="utf-8" />
	</head>
	<?php
		echo "<h3>Exercício 6</h3>";
		echo "<h4>Matriz multidimencional de produtos</h4>";
		$produtos[1]["desc"] = "Arroz";
		$produtos[1]["val"] = 22.00;
		$produtos[1]["qtd"] = 35;
		$produtos[2]["desc"] = "Feijão";
		$produtos[2]["val"] = 5.80;
		$produtos[2]["qtd"] = 28;
		$produtos[3]["desc"] = "Macarrão";
		$produtos[3]["val"] = 3.80;
		$produtos[3]["qtd"] = 54;
		$produtos[4]["desc"] = "Farinha";
		$produtos[4]["val"] = 2.55;
		$produtos[4]["qtd"] = 65;
		$produtos[1]["desc"] = "Óleo";
		$produtos[1]["val"] = 8.30;
		$produtos[1]["qtd"] = 42;
		
		$selProd = 2;
		echo "Produto item:	$selProd<br>
			descrição:		".$produtos[$selProd]["desc"]."<br>
			preço unitário:	".$produtos[$selProd]["val"]."<br>
			qtd em estoque:	".$produtos[$selProd]["qtd"]."<br>
			<br>";
		$selProd = 4;
		echo "Produto item:	$selProd<br>
			descrição:		".$produtos[$selProd]["desc"]."<br>
			preço unitário:	".$produtos[$selProd]["val"]."<br>
			qtd em estoque:	".$produtos[$selProd]["qtd"]."<br>
			<br>";
		?>
</html>
	