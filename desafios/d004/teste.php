<pre>
<?php 
    //colar url na aspas simples, se for aspas duplas vai entender o $ como uma variavel php
    //colocar contrabarra \ onde tem aspas para imprimir as aspas normal - caracter de escapa
    /*
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'01-27-2025\'&@dataFinalCotacao=\'02-03-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    */

    //a url vem com a data fica que define no site do banco centra, podemos passar a data do sistema 
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

    echo "A cotação foi $cotacao";
?>
</pre>