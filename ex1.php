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

        if($num1 != '' && $num2 != ''){
            if($num1 == $num2){
                echo "Os número são iguais";
            }elseif($num1 > $num2){
                echo "O número $num1 é maior que o $num2";
            }elseif($num2 > $num1){
                echo "O número $num2 é maior que o $num1";
            }
        }else{
            echo "<br>Aguardando inserir os números";
        }
    ?>
    <br>
    <br>
    <br>
        <a href="http://localhost:8080/">VOLTAR</a>
</body>
</html>