<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php 
                /* a funçao rand é antiga - usa um algoritimo de 1951 - linear congrential gererator - ele não é tão confivel atualmente e é mais lenta
                $num = rand(0, 100);
                echo "<br> O valor gerado foi <strong> $num </strong>";

                //o rand aceita receber o minimo maior que o maximo
                */

                //a função mais moderna e recomendada é mt_rand() - surgiu em 1997 - mersenne twister, é 4x mais rapido que o rand e é mais confiável

                //o min tem que ser menor que o maximo na funcao mt_rand()
                $min = 0;
                $max = 100;
                $num = mt_rand($min, $max);

                echo "Gerando um número aleatório entre $min e $max... <br>";
                echo "O valor gerado foi <strong> $num </strong>";

                // a partir do PHP 7.1 a funcao rand() se torna um apontamento para a funcao mt_rand() - segundo o manual

                /*
                //random_int() gera número aleatórios griptograficamente seguros - se preciso de segurança nesse numeros eu utilo essa função. Porém ele é o algoritmo mais lento de todos, só usar se necessário

                $num = random_int($min, $max);

                echo "Gerando um número aleatório entre $min e $max... <br>";
                echo "O valor gerado foi <strong> $num </strong>";
                */
            ?>
        </p>

        <button onclick="javascript:document.location.reload()">&#x1F504; Getar outro</button>
        
    </section>
</body>
</html>