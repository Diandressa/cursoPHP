# Pegar Dados de cotação pela API do Banco Central do Brasil - BCB

    -ir no site do banco central do brasil
    -na lupa pesquisa por dados abertos e clica no primeiro -> acesse o portal de dados aberts do BC
    -Pesqusa por dolar, clica no dolar comercial (venda e compra)
    -Ir em Cotação do Dólar por período
    -Clicar na URL
    -Coloca data de hoje e a data de 7 dias atras
    -Seleciona Cotação de compra, cotação de venda e data e hora da cotação
    - para ver em html selecione em Saída text/Html
    - Ele mostra a cotação de 5 dias, pois não faz a cotação no sábado e domingo
    -Aparece na ordem da data mais antiga para mais recente, precisamos inverter a ordem

    -ir no campo ordenação, copiar dataHoraCotacao e colar nesse campo com desc = dataHoraCotacao desc (ordena data mais recente para menos recente)

    - tirar as outras cotações dos dias anteriores: ir no campo máximo e coloca o valor 1

    - posso deixar marcado só a Cotação de compra e desmarcar a Cotação de venda

    - trocar a saída em json