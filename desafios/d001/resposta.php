<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
            <p>
                <?php 
                    $num = $_REQUEST['num'] ?? 0;//se nao vier o numero ele coloca 0

                    echo "O número escolhido foi <strong> $num </strong></br>";
                    echo "O seu <em>antecessor</em> é ". $num - 1 . "</br>";
                    echo "O seu <em>sucessor</em> é ". $num + 1 . " </br>";
                ?>
            
                <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> -->
                <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
            </p>
    </main>
</body>
</html>