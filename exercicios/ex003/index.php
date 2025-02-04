<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php  
        /*
            // 0x = Hexadecimal | 0b = binário | 0 = octal
            $num = 0x1A; // hexadecimal valor 26
            echo "O valor da variável é $num <br>";

            $var = "true";
            var_dump($var);
        */

        /*
            $num = (int)3e2; // 3 x 10(2) = 300 -- (int) ou (integer) força a tipagem - isso é uma coerção
            echo "O valor é $num <br>";
            var_dump($num); // float(300)
        */

        /*
            //coerção
            $num = (float) "950";
            var_dump($num);

            //boolean

            $casado = true;
            //var_dump($casado);
            //valor false mostra vazio no print e true mostra 1
            print "O valor para casado é $casado"
        */

        /*
            $vet = [6, 2.5, "Maria", 3, false];
            var_dump($vet);
        */

        /*
            class Pessoa {
                private string $nome;
            }

            $p = new Pessoa();
            var_dump($p);
        */

        $nome = "Maria";

        echo 'Ola $nome<br>'; // aspas simples não interpretam variáveis

        //interpolçaco é substituir o valor da variável na string

        const ESTADO = "RJ";
        //echo "Moro no ESTADO"; // não funciona, a contante não tem cifrão, por isso utilizamos o ponto para imprimir o valor

        echo "Moro no " . ESTADO;

       // echo "Estamos no ano de date('Y')"; 
       //não funciona aspas simples e dentro de aspas duplas não podemos usar aspas duplas novamente, o mesmo acontece dentro de aspas simples

        echo "<br>Estamos no ano de " . date('Y'); // temos que usar a interpolação, em função podemos usar aspas simples

        $nom = "Rodrigo";
        $snom = "Nogueira";

        //echo "nom "Minotauro" $snom; 
        // não funciona usar as aspas duplas dentro de aspas duplas, ou aspas simples dentro de aspas simples

        // echo '$nom "Minotauro" $snom'; //erro semântico, funciona, mas não é o que queremos, imprimi $nom "Minotauro" $snom

        //Queremos imprimir Rodrigo "Minotauro" Nogueira com as aspas

        //echo $nom " Minotauro " $nom; //da erro pq nao tem interpolação

        //echo $nom ." Minotauro ". $nom; //funciona, mas queremos imprimir as aspar em Rogrigo "Minotauro" Nogueira, pra isso usmso a contrabarra

        //Para imprimir as aspas usamos a sequência de escape, que é a contrabarra \"
        echo "<br> $nom \"Minotauro\" $nom <br>";

        //em aspas simples a única sequência de escape que funciona é a contrabarra \' com aspas simples

        echo 'nome \'sobrenome \' ultimo nome <br>'; 
        //imprimi nome 'sobrenome ' ultimo nome
        echo "nome \'sobrenome \' ultimo nome <br>"; 
        //imprimi nome \'sobrenome \' ultimo nome

        //Existem varias sequencias de escape para aspas duplas:
        /*
            \n - quebra de linha
            \t - tabulação horizontal (tab)
            \\ - exibi a barra invertida
            \$ - exibi cifrão
            \u{} - codepoint unicode (emote)
        */

        $nome2 = "Andressa";
        $sobrenome2 = "Nicolau";
        $apelido = "Apelido";
        
        echo "$nome2 '$apelido' $sobrenome2 <br>"; //imprimi Andressa 'Dessa' Nicolau - funciona para imprimir aspas simples

        echo "<pre>"; //só funciona dentro do pre
        echo "$nome2 \t\t  \"$apelido \" \t\t  $sobrenome2 "; //\t da tab 
        echo "</pre>";

        //Sintaxe Heredoc <<<

        $curso = "PHP";
        $ano = date('Y');

        echo "<pre>";
        echo <<< TEXTO
            estou estudando $curso em $ano
            Pula linha
        TEXTO;
        echo "</pre>";

        // diferença
        echo "
            estou estudando $curso em $ano
            não pula linha
        ";

        //Sintaxe Nowdoc // imprimi como se usasse aspas simples

        $curso = "PHP";
        $ano = date('Y');

        echo "<pre>";
        echo <<< 'TEXTO'
            estou estudando $curso em $ano 
            Pula linha
        TEXTO;
        echo "</pre>";

    ?>
</body>
</html>