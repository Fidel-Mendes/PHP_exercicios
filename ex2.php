<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio1</title>
</head>
<body>
    <form action="" method="post">
        <span>Entre com o primeiro valor  </span><input type="number" name="n1"><br>
        <span>Entre com o segundo valor  </span><input type="number" name="n2"><br>
        <span>Entre com o terceiro valor  </span><input type="number" name="n3"><br>
        <input type="submit" id="botao" name="enviar">
    </form>

    <?php
        if(isset($_POST['n1'])){
            $num1 = $_POST ['n1'];
        }else{
            $num1 = '';
        }

        if(isset($_POST['n2'])){
            $num2 = $_POST ['n2'];
        }else{
            $num2 = '';
        }

        if(isset($_POST['n3'])){
            $num3 = $_POST ['n3'];
        }else{
            $num3 = '';
        }

        if($num1 != '' && $num2 != '' && $num3 != ''){
            if($num1 == $num2 || $num1 == $num3 || $num2 == $num3){
                echo "Os número não são distintos";
                    // 1     2         2      3
            }elseif($num1 < $num2 && $num1 < $num3){
                echo "O menor número é $num1";
                //     1      2        2       3
            }elseif($num2 < $num1 && $num2 < $num3){
                echo "O menor número é $num2";
                //     1       3       1        2
            }elseif($num3 < $num1 && $num3 < $num2){
                echo "O menor número é $num3";
            }else{}
        }else{
            echo "Aguardando os números";
        }
    ?>
    <br>
    <br>
    <br>
        <a href="http://localhost:8080/">VOLTAR</a>
</body>
</html>