<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        
        $m = array ( array(6,4),
                     array(4,9),
                     array(4,9));
        $m[0][1] = $m [2][0];
        
        print_r($m);

        //array_push($vetor,7) coloca elemento no fim do vetor
        //array_pop($vetor) tira elemento do fim do vetor
        //array_unshift($vetor,8) coloca elemento no comeco do vetor
        //array_shift($vetor) elimina o primeiro elemento do vetor
        //sort($vetor) ordena o vetor crescente
        //rsort($vetor) ordena o vetor decrescente
        //asort($vetor) ordena os elementos tambem trocando os indices(No da posicao) do vetor
        //arsort($vetor) ordena os elementos tambem trocando os indices(No da posicao) do vetor em ordem reversa/decrescente
        //ksort($vetor) ordena exclusivamente os indices
        //krsort($vetor) ordena exclusivamente os indices em ordem reversa/decrescente
    ?>	
    </pre>
</div>
</body>
</html>
 