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
            //Cotação vinda da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days")); //pegar 7 dias antes
            $fim = date("m-d-Y");

            //corrigir na url
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            //tratamos o json com a função json_decode()

            //se coloco true organiza dentro de um array, se coloco false organiza dentro de um objeto, vamos usar como vetor
            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);
            //Posso ver no navegado em qual indice está a cotacao que quero

            //Acessar no array o indice valor na posição 0, com indice cotacaoCompra
            $cotacao = $dados['value'][0]["cotacaoCompra"];

            //---

            $real = $_REQUEST['real'] ?? 0; 
            $dolar = $real / $cotacao;

            //formatação de moedas com internacionalização
            //biblioteca php intl (internalization PHP) - ele nao é habilitado no servidor local
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            echo "*Cotação obtida diretamente do site do <a href=\"https://www.bcb.gov.br/\" target=\"_blank\">Banco Central do Brasil</a>: Cotação: $cotacao";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
</main>
</body>
</html>