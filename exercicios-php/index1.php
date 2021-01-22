<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Primeira Página em PHP</title>
</head>
<body>
<div>    
    <?php
        /*$nome = "Thiago";
        $idade = 21;
        echo ("Meu nome eh $nome e tenho $idade anos!");*/

        /*$n1 = 2;
        $n2 = 3;
        $m = ($n1 + $n2) / 2;*/
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo ("<h2>Valores recebidos $n1 e $n2</h2>");
        echo ("<br> A soma vale ". ($n1+$n2));
        echo ("<br> A subtracao vale ". ($n1-$n2));
        echo ("<br> A multiplicacao vale ". ($n1*$n2));
        echo ("<br> A divisao vale ". ($n1/$n2));
        echo ("<br> O modulo vale ". ($n1%$n2));
        echo ("<br> A media vale ". ($n1+$n2) / 2 );

        
    ?>
</div>    
</body>
</html>