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
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:"sem nota";
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:"sem nota";

        $media = ($nota1 + $nota2) / 2;

        if ($media >= 7) {
            echo "Sua média é $media e você foi aprovado.";
        } elseif ($media>=5 and $media<7) {
                echo "Sua média é $media e você foi está na recuperação.";
          } else {
                echo "Sua média é $media e você foi reprovado.";
           }
    ?>
</div>
</body>
</html>
 