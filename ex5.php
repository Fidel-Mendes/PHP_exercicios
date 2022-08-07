<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio5</title>
</head>
<body>
    <form action="" method="post">
        <span>Insira o Salário a ser reajustado</span><input type="number" name="salario"><br>
        <input type="submit" id="botao" name="enviar">
    </form>

    <?php
        if(isset($_POST['salario'])){
            $Sal = $_POST ['salario'];
        }else{
            $Sal = '';
        }

        $reajust1 = 300;
        $reajust2 = 250;
        $reajust3 = 200;
        $SaldoAjust = '';

        if($Sal != ''){
            if($Sal <= 0){
                echo "Digite um valor válido";
            }else{
                if($Sal > 0 && $Sal <= 1200){
                    $SaldoAjust = $Sal + $reajust1;
                    echo "O salário foi reajustado: $SaldoAjust";
                }elseif($Sal > 1200 && $Sal <= 1600){
                    $SaldoAjust = $Sal + $reajust2;
                    echo "O salário foi reajustado: $SaldoAjust";
                }elseif($Sal > 1600){
                    $SaldoAjust = $Sal + $reajust3;
                    echo "O salário foi reajustado: $SaldoAjust";
                }else{
    
                }
            }
            
        }else{
            echo "Digite o sálario no campo acima";
        }

    ?>
    <br>
    <br>
    <br>
        <a href="http://localhost:8080/">VOLTAR</a>
</body>
</html>