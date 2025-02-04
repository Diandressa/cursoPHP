<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultadot</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //var_dump($_GET);
            //$_GET é uma Super Global que armazena os valores passados por URL, já vem como array declarado no php por padrão

            //var_dump($_REQUEST), // Junção de $_GET + $_POST + $_COOKIES, ele pode ocupar mais memoria

            //Imprimir na tela os names enviados pela url
              
            //Recebe o name do input do formulário e armazena na variavel
            $nome = $_GET['nome'] ?? " sem nome"; 
            $sobrenome = $_GET['sobrenome'] ?? "desconhecido";

            echo "<p>É um prazer te conhecer, $nome $sobrenome. Este é o meu site! </p>";
        ?>
        <p style="text-align: center;">
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>
        
    </main>
</body>
</html>