<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $a = isset($_GET["ano"])?($_GET["ano"]):1900;
        $i = date ("Y") - $a;
        /*echo "Você nasceu em $a e tem $i anos. <br>";
        if($i >= 18) {
            echo "Voce pode votar e dirigir.";
            #$v = "ja pode votar";
            #$d = "ja pode dirigir";
        } else {
            echo "Voce nao pode votar nem dirigir.";
            #$v = "nao pode votar";
            #$d = "nao pode dirigir";
        }
        #echo "Com essa idade voce $v e tambem $d";*/
        echo  "Você nasceu em $a e tem $i anos. <br>";
        if ($i<16) {
            echo "Não pode votar";
        } elseif (($i>=16 and $i<18) or ($i>65)){
                echo "Voto facultativo";
          } else {
                echo "Voto obrigatorio";
           }
        
     
    ?>
</div>
</body>
</html>
 