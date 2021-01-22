<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercícios</title>
</head>
<body>
<div>    
    <?php
        $preco = $_GET["p"];
        echo ("O preço do produto é $preco");
        $preco *= 1.1;
        echo ("<br> O preço do produto após o aumento é $preco");
        $preco *= 0.9;
        echo ("<br> O preço do produto com desconto após o aumento é R$ " .number_format($preco, 2));

    ?>
</div>
</body>
</html>
