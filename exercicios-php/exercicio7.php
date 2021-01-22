<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções aritméticas</title>
</head>
<body>
<div>    
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];

        $media = ($nota1 + $nota2) / 2;

        #$situacao = $media >= 7 ? "PASSOU" : "REPROVOU";
        #echo "$situacao";

        echo "A situação do aluno é " .(($media >= 7) ? "PASSOU" : "REPROVOU");

    ?>
</div>
</body>
</html>

