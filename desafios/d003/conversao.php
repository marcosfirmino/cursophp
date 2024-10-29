<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 3</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
            // Cotacao copiada do Google
            $cotacao = 5.73;

            //Quanto R$ voce tem ?
            $real = $_REQUEST["din"];

            // Equivalencia em dolar
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>