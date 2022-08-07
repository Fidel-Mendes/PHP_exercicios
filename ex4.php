<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio4</title>
</head>
<body>
    <form action="" method="post">
        <span>Insira sua idade&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><input type="number" name="idade"><br>
        <span>Insira o código (12345) </span><input type="password" name="senha"><br>
        <span>É NECESSARIO SER +18 PARA ACESSAR</span><br>
        <input type="submit" id="botao" name="enviar">
    </form>

    <?php
        if(isset($_POST['idade'])){
            $Idade = $_POST ['idade'];
        }else{
            $Idade = '';
        }

        if(isset($_POST['senha'])){
            $Senha = $_POST ['senha'];
        }else{
            $Senha = '';
        }

        define("PASSWORD", 12345);//Checar as aspas depois

        if($Idade != '' && $Senha != ''){
            if($Senha == PASSWORD && $Idade >= 18){
                echo "Acesso permitido! prossiga";
            }else{
                echo "Acesso negado!";
            }
        }else{
            echo "Insira seus dados";
        }
    ?>
    <br>
    <br>
    <br>
        <a href="http://localhost:8080/">VOLTAR</a>
</body>
</html>