<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversos de Moedas</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 

            $real = $_REQUEST['real'] ?? 0;
            /*
            //Jeito tradicional
            $cotacao = 5.9668;
            $dolar = $real / $cotacao;

            echo "Seus R\$ ". number_format($real, 2, "," , ".") . " equivalem a US\$ ". number_format($dolar, 2, "," , ".");

            //\$ é a sequencia de escape para escrever $, para ele entender $ como texto e nao como um variavel
            */
            
            $cotacao = 5.9668;
            $dolar = $real / $cotacao;

            //formatação de moedas com internacionalização
            //biblioteca php intl (internalization PHP) - ele nao é habilitado no servidor local
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
</main>
</body>
</html>