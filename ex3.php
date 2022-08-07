<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio3</title>
</head>
<body>
    <form action="" method="post">
        <span>Insira a idade do nadador </span><input type="number" name="idade"><br>
        <input type="submit" id="botao" name="enviar">
    </form>

    <?php
        if(isset($_POST['idade'])){
            $Idade = $_POST ['idade'];
        }else{
            $Idade = '';
        }

        if($Idade != ''){
            if($Idade <= 0){
                echo "Essa idade não é válida";
            }elseif($Idade > 0 && $Idade < 8){
                echo "O nadador é classe Infantil A";
            }elseif($Idade >= 8 && $Idade < 12){
                echo "O nadador é classe Infantil B";
            }elseif($Idade >= 12 && $Idade < 14){
                echo "O nadador é classe Juvenil A";
            }elseif($Idade >= 14 && $Idade < 18){
                echo "O nadador é classe Juvenil B";
            }elseif($Idade >= 18){
                echo "O nadador é classe Adulto (+18)";
            }else{

            }
        }else{
                echo "Aguardando idade do nadador";
        }
    
    ?>
    <br>
    <br>
    <br>
        <a href="http://localhost:8080/">VOLTAR</a>
</body>
</html>