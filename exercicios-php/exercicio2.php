<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Exercícios</title>
</head>
<body>
<div>    
    <?php
        $atual = $_GET["aa"];
        echo ("O ano atual é $atual e o ano anterior foi " . --$atual);
    ?>
</div>
</body>
</html>
