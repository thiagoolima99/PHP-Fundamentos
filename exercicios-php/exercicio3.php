<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Exercícios</title>
</head>
<body>
<div>    
    <?php
        /* Código abaixo sem usar referencia nas variáveis
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br> A variavel B vale $b";
        */

        # Código abaixo usando referência através do caractere '&' 
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br> A variavel B vale $b";
        
    ?>
</div>
</body>
</html>
