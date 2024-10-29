<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 1</title>
 </head>
 <body>
    <header>
        <h1>Informe um numero</h1>
    </header>
    <main>
        <h1>Resultado final</h1>
        <P>
            <?php
                $n = $_REQUEST["num"] ?? 0;
                $ant = $n -1;
                $suc = $n +1;
    
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu antecessor é $ant";
                echo "<br>O seu sucessor é $suc";
            ?>
        </P>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
 </body>    
 </html>