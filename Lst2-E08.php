<!DOCTYPE_html>
<html lang="pt-BR">
	<head>
		<title>Lista 2 - Exercício 8</title>
		<meta charset="utf-8" />
	</head>
	<?php
		echo "<h3>Exercício 8</h3>";
		echo "<h4>Matriz multidimencional de pedidos</h4>";
		$qtdPedido=0;
		$subTotal=0;
		echo $qtdPedido."<br>";
		echo $subTotal."<br>";
		
		
		$itemProd = 1;
		$pedido[$itemProd]["desc"] = "Arroz";
		$pedido[$itemProd]["val"] = 22.00;
		$pedido[$itemProd]["qtd"] = 3;
		$qtdPedido=$qtdPedido+$pedido[$itemProd]["qtd"];
		$subTotal=$subTotal+($pedido[$itemProd]["val"]*$pedido[$itemProd]["qtd"]);
		echo $qtdPedido."<br>";
		echo $subTotal."<br>";
		$itemProd = 2;
		$pedido[$itemProd]["desc"] = "Feijão";
		$pedido[$itemProd]["val"] = 5.90;
		$pedido[$itemProd]["qtd"] = 4;
		$qtdPedido=$qtdPedido+$pedido[$itemProd]["qtd"];
		$subTotal=$subTotal+($pedido[$itemProd]["val"]*$pedido[$itemProd]["qtd"]);
		echo $qtdPedido."<br>";
		echo $subTotal."<br>";
		$itemProd = 3;
		$pedido[$itemProd]["desc"] = "Macarrão";
		$pedido[$itemProd]["val"] = 3.80;
		$pedido[$itemProd]["qtd"] = 5;
		$qtdPedido=$qtdPedido+$pedido[$itemProd]["qtd"];
		$subTotal=$subTotal+($pedido[$itemProd]["val"]*$pedido[$itemProd]["qtd"]);
		echo $qtdPedido."<br>";
		echo $subTotal."<br>";		
		$itemProd = 4;
		$pedido[$itemProd]["desc"] = "Farinha";
		$pedido[$itemProd]["val"] = 2.35;
		$pedido[$itemProd]["qtd"] = 3;
		$qtdPedido=$qtdPedido+$pedido[$itemProd]["qtd"];
		$subTotal=$subTotal+($pedido[$itemProd]["val"]*$pedido[$itemProd]["qtd"]);
		echo $qtdPedido."<br>";
		echo $subTotal."<br>";
		$itemProd = 5;
		$pedido[$itemProd]["desc"] = "Óleo";
		$pedido[$itemProd]["val"] = 8.30;
		$pedido[$itemProd]["qtd"] = 2;
		$qtdPedido=$qtdPedido+$pedido[$itemProd]["qtd"];
		$subTotal=$subTotal+($pedido[$itemProd]["val"]*$pedido[$itemProd]["qtd"]);
		echo $qtdPedido."<br>";
		echo $subTotal."<br>";
		$itemProd = 6;
		$pedido[$itemProd]["desc"] = "Açucar";
		$pedido[$itemProd]["val"] = 2.95;
		$pedido[$itemProd]["qtd"] = 3;
		$qtdPedido=$qtdPedido+$pedido[$itemProd]["qtd"];
		$subTotal=$subTotal+($pedido[$itemProd]["val"]*$pedido[$itemProd]["qtd"]);
		echo $qtdPedido."<br>";
		echo $subTotal."<br>";

		
		$selProd = 1;
		echo "Produto item:	$selProd<br>
			descrição:		".$pedido[$selProd]["desc"]."<br>
			preço unitário:	".$pedido[$selProd]["val"]."<br>
			qtd comprada:	".$pedido[$selProd]["qtd"]."<br>
			<br>";
		$selProd = 6;
		echo "Produto item:	$selProd<br>
			descrição:		".$pedido[$selProd]["desc"]."<br>
			preço unitário:	".$pedido[$selProd]["val"]."<br>
			qtd comprada:	".$pedido[$selProd]["qtd"]."<br>
			<br>";
		echo "Quantidade de produtos no pedido: $qtdPedido.<br>";
		echo "Valor total do pedido: R$ $subTotal."
		?>
</html>
	