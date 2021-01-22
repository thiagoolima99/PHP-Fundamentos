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
        <table border="1"><tr>
    <?php
        //$n = array(3,5,8,2);
        $c = range(5,20,5);
        
        //print_r($n);
        print_r($c);

        foreach($c as $valor) {
            echo "<td>$valor ";
        }

        //unset(v[0]); comando para diminuir estrutra do vetor na posicao 0 nesse caso
           
    ?>
        </table>	
    </pre>
</div>
</body>
</html>
 