<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Funções aritméticas</title>
</head>
<body>
<div>    
    <?php
        $ano = $_GET["an"];
        $idade = 2014 - $ano;        
        echo "Quem nasceu no ano $ano tem $idade anos.";
        $tipo = ($idade >=18 and $idade < 65) ? "OBRIGATORIO" : "NAO OBRIGATORIO";
        echo "<br> Seu voto é $tipo.";
    ?>
</div>
</body>
</html>

