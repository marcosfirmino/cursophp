<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); // GMT -3
        echo "Hoje e dia" . date(" d/m/y");
        echo " e a hora atual e " . date("G:i:s")
    ?>
</body>
</html>