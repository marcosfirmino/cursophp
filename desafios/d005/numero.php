<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 5</title>
</head>
<body>
    <main>
        <h1>Analisador de Numero Real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;

            echo "Analisando o numero <strong>". number_format($num, 3, ",", ".")."</strong> informado pelo usuario:";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li>A parte inteira do numero e <strong>". number_format($int, 0, ",", ".")."</strong>";
            echo "<li>A parte fracionaria do numero e <strong>". number_format($fra, 3, ",", ".")."</strong>";

        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html